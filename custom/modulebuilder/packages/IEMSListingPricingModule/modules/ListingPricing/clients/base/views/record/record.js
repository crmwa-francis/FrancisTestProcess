({
    initOptions: undefined,
    extendsFrom: 'ProjectmodulerecordView',
    initialize: function (opts) {
        this.initOptions = opts;
        this._super('initialize', [opts]);
        this._myCustomEvents();
    },
    /**
     * Override the default build grids method
     * call workflow collection
     * @param panels
     * @private
     */
    _buildGridsFromPanelsMetadata: function (panels) {
        this._super('_buildGridsFromPanelsMetadata', [panels]);
        this._workflowCollection();
    },
    /**
     * Get parent module record
     * @returns {*}
     * @private
     */
    _getParentListing: function () {
        var result = null;
        var pricing = this.model.attributes;

        if (!this.model.attributes.listing_id) {
            if (app.currentParentRecord && app.currentParentRecord.module == this.module && app.currentParentRecord.listing_id) {
                pricing = app.currentParentRecord;
            } else if (!_.isEmpty(this.module) && !_.isElement(this.model.id)) {
                pricing = app.restHelper.retrieveRecord(this.module, this.model.id)
            }
        }

        if (!_.isEmpty(pricing) && _.isObject(pricing) && typeof pricing['listing_id'] !== 'undefined') {
            result = app.restHelper.retrieveRecord('iems_Listing', pricing.listing_id);
        }

        return result;
    },
    /**
     * Set custom event listeners
     * @private
     */
    _myCustomEvents: function () {
        if (_.isObject(this.context.parent) && !_.isEmpty(this.context.parent.get('model')) && !_.isUndefined(this.context.parent.get('model'))) {
            var parentModel = this.context.parent.get('model');
            if (!parentModel) {
                return;
            }
            this.context.parent.on('button:edit_button:click', function () {
                this.cancelClicked('button:edit_button:click');
            }, this);

            this._handleParentSave();
            app.events.on("data:sync:success", this.updateParentRecord, this);
        }
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
            var url = app.api.buildURL(this.initOptions.context.get('module'), null, {id: this.initOptions.context.get('modelId')});
            app.api.call("read", url, null, options);

        }, this);
    },
    /**
     * Workflow collection method
     * @private
     */
    _workflowCollection: function () {
        this._disableFields();
    },
    /**
     * Disable fields
     * @private
     */
    _disableFields: function () {
        var listing = this._getParentListing(),
            disabledFields = ['land_deposit_amount', 'land_deposit_percent', 'land_price'],
            self = this;
        if (!_.isEmpty(listing) && _.isObject(listing)) {
            if (listing.property_type == "townhouse_villa" || listing.property_type == "house_land" || listing.property_type == "unit_apartment") {
                _.each(disabledFields, function (field) {
                    self.noEditFields.push(field);
                });
            }
        }
    },
    updateParentRecord:  function(method,model,options,request){
        if(method == 'update' && model.get('_module') == 'iems_ListingPricing'){
            this.context.parent.trigger('reload:from:child');
        }
    }
})