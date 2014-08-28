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
    parentRecord: null,
    _buildGridsFromPanelsMetadata: function (panels) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: '_buildGridsFromPanelsMetadata',
            args: [panels]
        });
        if(this.context.parent && this.context.parent.get('module') == 'iems_Project'){
            this.parentRecord = this.context.parent.get('model');
            this._disableFields();
        }

    },
    _disableFields: function () {
        var disabledFields = [], self = this;
        this._unitApartmentDisable(disabledFields);
        this._landSizeDisable(disabledFields);
        this._totalDisable(disabledFields);
        if (!_.isEmpty(disabledFields)) {
            _.each(disabledFields, function (field) {
                self.noEditFields.push(field);
            });
        }

    },
    _unitApartmentDisable: function (disableField) {
        if (_.contains(this.parentRecord.get('property_type'), 'unit_apartment')) {
            disableField.push('lot_width');
            disableField.push('lot_length');
        }
    },
    _landSizeDisable: function (disableField) {
        if (_.contains(this.parentRecord.get('property_type'), 'house') || _.contains(this.parentRecord.get('property_type'), 'unit_apartment')) {
            disableField.push('land_size');
            disableField.push('loading');
        }
    },
    _totalDisable: function(disableField){
        if(_.contains(this.parentRecord.get('property_type'), 'land') ){
            disableField.push('total');
        }
    }
})
