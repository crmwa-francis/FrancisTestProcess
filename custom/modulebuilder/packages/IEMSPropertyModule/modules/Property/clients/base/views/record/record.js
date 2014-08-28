({
    extendsFrom: 'ProjectmodulerecordView',
    initialize: function (opts) {
        this._super('initialize', [opts]);
        this._monitorEvents();
    },
    getParentProject: function () {
        var result = null;
        var property = this.model.attributes;
        if (!this.model.attributes.iems_project_id_c) {
            property = app.restHelper.retrieveRecord(this.module, this.model.id)
        }

        result = app.restHelper.retrieveRecord('iems_Project', property.iems_project_id_c);
        return result;
    },

    /**
     * Monitor the parent listing's events
     * @private
     */
    _monitorEvents: function () {
        if (this.context.parent) {
            if (this.context.parent.attributes.module == 'iems_Listing') {
                this._onParentEditButtonClick();
                this._onParentListingSave();
            }
        }
        this.context.on('button:createcontract:click', this.createReservationWorkflow, this);
    },
    /**
     * If the edit button is licked on the parent listing
     * and the child property is on edit mode then cancel edit
     * @private
     */
    _onParentEditButtonClick: function () {
        this.context.parent.on('button:edit_button:click', function () {
            this.cancelClicked('button:edit_button:click');
        }, this);
    },
    /**
     * When the parent listing is saved reload the property subpanel including its data
     * @private
     */
    _onParentListingSave: function () {
        this.context.parent.get('collection').on('data:sync:complete', function (method) {
            if (method != 'update') {
                return;
            }
            var opts = {
                showAlert: true,
                success: _.bind(function (data) {
                    if (data) {
                        this.model.attributes = data;
                        this._render();
                    }
                }, this),
                error: _.bind(function (error) {
                    if (error.status == 412 && !error.request.metadataRetry) {
                        this.handleMetadataSyncError(error);
                    } else {
                        this.editClicked();
                    }
                }, this)
            }
            var url = app.api.buildURL(this.context.get('module'), null, {id: this.context.get('modelId')});
            app.api.call("read", url, null, opts);
        }, this);

    },
    _buildGridsFromPanelsMetadata: function (panels) {
        this._super('_buildGridsFromPanelsMetadata',[panels]);
        if (this.context.parent && this.context.parent.get('module') == 'iems_Listing') {
            var parentListing = app.restHelper.retrieveRecord(this.context.parent.get('module'), this.context.parent.get('modelId'));
            this.parentRecord = this.context.parent.get('model');
            this._disableFields(parentListing);
        }

    },
    _disableFields: function (parentListing) {
        this._unitApartmentDisable(parentListing);
        this._landSizeDisable(parentListing);
        this._totalDisable(parentListing);
    },
    _unitApartmentDisable: function (parentListing) {
        var noEditFields = ['lot_width','lot_length'], self = this;
        if (parentListing.property_type == 'unit_apartment') {
            _.each(noEditFields, function(field){
                if(!_.contains(self.noEditFields, field)){
                    self.noEditFields.push(field);
                }
            });
        } else {
            _.each(self.noEditFields, function(field,key){
                if(_.contains(noEditFields,field)){
                    delete self.noEditFields[key];
                }
            });
        }
    },
    _landSizeDisable: function (parentListing) {
        var noEditFields = ['land_size','loading'], self = this,
            disableIf = ['house', 'unit_apartment'];
        if (_.contains(disableIf,parentListing.property_type)) {
            _.each(noEditFields, function(field){
                if(!_.contains(self.noEditFields, field)){
                    self.noEditFields.push(field);
                }
            });
        } else {
            _.each(self.noEditFields, function(field,key){
                if(_.contains(noEditFields,field)){
                    delete self.noEditFields[key];
                }
            });
        }
    },
    _totalDisable: function (parentListing) {
        var noEditFields = ['total'], self = this;
        if (parentListing.property_type == 'land') {
            _.each(noEditFields, function(field){
                if(!_.contains(self.noEditFields, field)){
                    self.noEditFields.push(field);
                }
            });
        } else {
            _.each(self.noEditFields, function(field,key){
                if(_.contains(noEditFields,field)){
                    delete self.noEditFields[key];
                }
            });
        }
    }
})