/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/
({
    extendsFrom: 'CreateView',
    initialize: function (options) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'create',
            method: 'initialize',
            platform: 'base',
            args: [options]
        });
        this.enableDuplicateCheck = false;
    },
    _buildGridsFromPanelsMetadata: function (panels) {
        this.changeLabels(panels);
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: '_buildGridsFromPanelsMetadata',
            args: [panels]
        });
        this.disabledFields();
    },
    initiateSave: function (callback) {
        this.disableButtons();
        async.waterfall([_.bind(this.inpropertyBeforeSaveWorkflow, this), _.bind(this.validateModelWaterfall, this), _.bind(this.dupeCheckWaterfall, this), _.bind(this.createRecordWaterfall, this)], _.bind(function (error) {
            this.enableButtons();
            if (error && error.status == 412 && !error.request.metadataRetry) {
                this.handleMetadataSyncError(error);
            } else if (!error && !this.disposed) {
                this.context.lastSaveAction = null;
                callback();
            }
        }, this));
    },
    inpropertyBeforeSaveWorkflow: function (callback) {
        if (this.context.parent.get('module') == 'iems_Project') {
            this.getFields(this.module).deposit_held_by.required = this.model.get('invest_deposit') == 'Yes' ? true : false;
            this.getFields(this.module).cooling_off_days.required = this.model.get('cooling_of_required') == 'Yes' ? true : false;

            var land = this.model.get('land_deposit_percent') ? this.model.get('land_deposit_percent') : this.model.get('land_deposit_amount');
            var house = this.model.get('house_deposit_percent') ? this.model.get('house_deposit_percent') : this.model.get('house_deposit_amount');
            var deposit = this.model.get('exchange_deposit_percent') ? this.model.get('exchange_deposit_percent') : this.model.get('exchange_deposit_amount');

            if (land && house && deposit) {
                app.alert.show('invalid-data', {
                    level: 'error',
                    messages: 'Land Deposit, House Deposit and Exchange Deposit must not have values at the same time',
                    autoClose: true
                });
                callback(true);
                return true;
            }
        }
        callback(false);
    },
    disabledFields: function () {
        var self = this;
        var parentAttrib = self.context.parent.attributes.model.attributes;
        var noEditFields = [
            'land_deposit_percent',
            'land_deposit_amount',
            'house_deposit_percent',
            'house_deposit_amount'
        ];
        if (self.context.parent.get('module') == 'iems_Project') {
            if (_.indexOf(parentAttrib.property_type, 'unit_apartment') >= 0 || _.indexOf(parentAttrib.property_type, 'townhouse_villa') >= 0) {
                _.each(noEditFields, function (field) {
                    self.noEditFields.push(field);
                });
            }
            if (parentAttrib.primary_address_state != 'NSW') {
                self.noEditFields.push('days_to_exchange');
            }
        }
    },
    changeLabels: function (panels) {
        var primaryAddressState = this.context.parent.attributes.model.attributes.primary_address_state;
        if (this.context.parent.get('module') != 'iems_Project' && panels.name != 'panel_body') {
            return;
        }
        _.each(panels, function (panel) {
            _.each(panel.fields, function (field) {
                switch(field.name){
                    case 'exchange_deposit_percent':
                        if (primaryAddressState != 'NSW') {
                            field.label = 'Deposit %';
                        }
                        break;
                    case 'exchange_deposit_amount':
                        if (primaryAddressState != 'NSW') {
                            field.label = 'Deposit $';
                        }
                        break;
                    default:
                        break;
                }
            });
        }, this);
    }
})