({
    duplicateCounter: 0,
    extendsFrom: 'ProjectmodulerecordView',
    workflowPropertyType: ['unit_apartment', 'townhouse_villa', 'house_land'],
    customEvent: {
        'change input[name=settle_land_first]': 'settleLandFirstWorkflow'
    },
    initialize: function (opts) {
        this.events = _.extend({}, this.events, this.customEvent);
        this._super('initialize', [opts]);
        this.customTriggerEvents();
    },
    /**
     * Capture events and trigger appropriate actions
     * must have parent project record
     */
    customTriggerEvents: function () {
        if (!this.context.parent || !this.context.parent.attributes) {
            return;
        }
        var parentModel = this.context.parent.get('model');
        if (!parentModel) {
            return;
        }
        this.context.parent.on('change', this.cancelClicked, this);
        this.listenTo(this.context.parent, 'handleEdit', function () {
            this.cancelClicked();
        }, this);
        this._handleParentSave();
        this.context.on('button:edit_button:click', function () {
            this.exchangeDepositToggle(this.handleDepositBehavior(this.model.get('settle_land_first')));
        }, this);
    },
    getParentProject: function () {
        var pricing = this.model.attributes || {};
        if (!pricing || !pricing.project_id) {
            pricing = app.restHelper.retrieveRecord(this.module, this.context.get('modelId'));
        }
        if (!pricing || !pricing.project_id) {
            return {stages: ''};
        }
        var parentProject = app.restHelper.retrieveRecord('iems_Project', pricing.project_id);
        if (parentProject) {
            this.context['parent'] = parentProject;
        }
        return parentProject;
    },
    /**
     * handle parent save custom event
     * @private
     */
    _handleParentSave: function () {
        this.context.parent.get('collection').on("data:sync:complete", function (method) {
            if (method != 'update') {
                return;
            }
            var options = {
                showAlerts: true,
                success: _.bind(function (data) {
                    if (data) {
                        this.context.attributes.model.attributes = data;
                        this.model._syncedAttributes = data;
                        this.model.attributes = data;
                        this.render();
                    }
                }, this),
                error: _.bind(function (error) {
                    if (error.status == 412 && !error.request.metadataRetry) {
                        this.handleMetadataSyncError(error);
                    } else {
                        this.editClicked();
                    }
                }, this)
            };
            var url = app.api.buildURL(this.model.get('_module'), null, {id: this.model.get('id')});
            app.api.call("read", url, null, options);

        }, this);
    },
    /**
     * Override the save clicked event, add a waterfall for the process to be executed
     */
    saveClicked: function () {
        async.waterfall([_.bind(this.inpropertyBeforeSaveWorkflow, this), _.bind(this.validateModelWaterfall, this)]);
    },
    /**
     * If save is true
     * then call the parent save clicked method
     */
    validateModelWaterfall: function () {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: 'saveClicked',
            platform: 'base'
        });
    },
    /**
     * Perform validation before saving the record
     * @param callback
     * @returns {boolean}
     */
    inpropertyBeforeSaveWorkflow: function (callback) {
        if (!this.context.parent) {
            callback(false);
        }
        if (this.context.parent.get('module') == 'iems_Project') {
            this.getFields(this.module).deposit_held_by.required = this.model.get('invest_deposit') == 'Yes' ? true : false;
            this.getFields(this.module).cooling_off_days.required = this.model.get('cooling_of_required') == 'Yes' ? true : false;

            var land = this.model.get('land_deposit_percent') ? this.model.get('land_deposit_percent') : this.model.get('land_deposit_amount');
            var house = this.model.get('house_deposit_percent') ? this.model.get('house_deposit_percent') : this.model.get('house_deposit_amount');
            var deposit = this.model.get('exchange_deposit_percent') ? this.model.get('exchange_deposit_percent') : this.model.get('exchange_deposit_amount');

            if ((land && deposit) || (house && deposit)) {
                app.alert.show('invalid-data', {
                    level: 'error',
                    messages: 'Land Deposit or House Deposit cannot be entered with Exchange Deposit',
                    autoClose: true
                });
                callback(true);
                return true;
            }
            if (this.handleDepositBehavior(this.model.get('settle_land_first')) == false && deposit) {
                app.alert.show('invalid-data', {
                    level: 'error',
                    messages: 'Exchange/Deposit Field Error, Project Property Type is invalid or settle land first is set to "Yes" ',
                    autoClose: true
                });
                callback(true);
                return true;
            }
        }
        callback(false);
    },
    /**
     * Override the default _buildGridsFromPanelsMetadata
     * get parent project record
     * change labels if applicable
     * call parent _buildGridsFromPanelsMetadata
     * call disable fields
     * @param panels
     * @private
     */
    _buildGridsFromPanelsMetadata: function (panels) {
        var parentProject = null;
        if (this.context.parent && this.context.parent.attributes) {
            var parentProject = app.restHelper.retrieveRecord(this.context.parent.get('module'), this.context.parent.get('modelId'));
            this.changeLabels(panels, parentProject);
        }
        this._super('_buildGridsFromPanelsMetadata', [panels]);
        if (parentProject != null) {
            this.disabledFields(parentProject);
        }
    },
    /**
     * Change Pricing field(s) label based on Project field value
     * @param Object panels
     * @param iems_Project Object parentProject
     */
    changeLabels: function (panels, parentProject) {
        if ((_.isEmpty(parentProject) || !_.isObject(parentProject)) || (parentProject._module != 'iems_Project' && panels[1].name != 'panel_body'))
            return;
        _.each(panels, function (panel) {
            _.each(panel.fields, function (field) {
                switch (field.name) {
                    case 'exchange_deposit_amount':
                        var lastChar = '$';
                    case 'exchange_deposit_percent':
                        var lastChar = lastChar || '%';
                        if (parentProject.primary_address_state != 'NSW') {
                            field.label = 'Deposit ' + lastChar;
                        } else {
                            field.label = 'Exchange Deposit ' + lastChar;
                        }
                        break;
                    default:
                        break;
                }
            });
        });
    },
    /**
     * Disable the Pricing fields based on project field values
     * @param iems_Project Object parentProject
     */
    disabledFields: function (parentProject) {
        if (_.isEmpty(parentProject) || !_.isObject(parentProject) || parentProject._module != 'iems_Project') {
            return;
        }
        var self = this;
        var noEditFields = [
            'land_deposit_percent',
            'land_deposit_amount',
            'house_deposit_percent',
            'house_deposit_amount'
        ];

        if (parentProject._module == 'iems_Project') {
            var noDisplayFields = _.intersection(parentProject.property_type, this.workflowPropertyType);

            if (!_.isEmpty(noDisplayFields) && _.isArray(noDisplayFields)) {
                _.each(noEditFields, function (field) {
                    if (!_.contains(self.noEditFields, field)) {
                        self.noEditFields.push(field);
                    }
                });
            } else {
                _.each(self.noEditFields, function (field, key) {
                    if (_.contains(noEditFields, field)) {
                        delete self.noEditFields[key];
                    }
                });
            }
            if (parentProject.primary_address_state != 'NSW') {
                self.noEditFields.push('days_to_exchange');
            }
        }
    },
    toggleEdit: function (isEdit) {
        if (isEdit == true && this.context.get('module') == 'iems_Pricing') {
            this.disabledFields(this.context.parent.get('model').attributes);
            this.setEditableFields();
        }
        this._super('toggleEdit', [isEdit]);
    },
    _saveModel: function () {
        var options, successCallback = _.bind(function () {
            _.each(this.context.children, function (child) {
                if (!_.isUndefined(child.attributes) && !_.isUndefined(child.attributes.isSubpanel)) {
                    if (child.attributes.isSubpanel && !child.attributes.hidden) {
                        child.attributes.collection.fetch();
                    }
                }
            });
            if (this.createMode) {
                app.navigate(this.context, this.model);
            } else if (!this.disposed) {
                this.render();
            }
        }, this);
        this.turnOffEvents(this.fields);
        options = {
            showAlerts: true,
            success: successCallback,
            error: _.bind(function (error) {
                if (error.status == 550) {
                    app.alert.show('pricing-error', {level: 'error', messages: error.message});
                    this.editClicked();
                    return false;
                } else if (error.status === 412 && !error.request.metadataRetry) {
                    this.handleMetadataSyncError(error);
                } else if (error.status === 409) {
                    app.utils.resolve409Conflict(error, this.model, _.bind(function (model, isDatabaseData) {
                        if (model) {
                            if (isDatabaseData) {
                                successCallback();
                            } else {
                                this._saveModel();
                            }
                        }
                    }, this));
                } else {
                    this.editClicked();
                }
            }, this),
            lastModified: this.model.get('date_modified'),
            viewed: true
        };
        options = _.extend({}, options, this.getCustomSaveOptions(options));
        this.model.save({}, options);
    },
    settleLandFirstWorkflow: function (evt) {
        this.exchangeDepositToggle(this.handleDepositBehavior(this.$(evt.currentTarget).val()));

    },
    exchangeDepositToggle: function (action) {
        if (action == false) {
            this.$('span[data-fieldname=exchange_deposit_amount], span[data-fieldname=exchange_deposit_percent]').hide();
            this.$('span[data-fieldname=exchange_deposit_amount] input, span[data-fieldname=exchange_deposit_percent] input').val('');
        } else {
            this.$('span[data-fieldname=exchange_deposit_amount], span[data-fieldname=exchange_deposit_percent]').show();
        }
        app.api.buildUrl
    },
    handleDepositBehavior: function (settleLandFirst) {
        var parent = this.context.parent;
        if (!parent || !parent.attributes.model.attributes.property_type) {
            parent = app.currentParentRecord
        } else {
            parent = parent.attributes.model.attributes;
        }
        var noDisplayFields = _.intersection(parent.property_type, this.workflowPropertyType);

        if (_.isEmpty(noDisplayFields) || !_.isArray(noDisplayFields)) {
            return false;
        }

        if (settleLandFirst == 'Yes') {
            return false;
        }

        return true;
    }
})