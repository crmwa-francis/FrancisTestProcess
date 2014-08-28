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
    disabledFields: [
        'company_name',
        'first_name',
        'last_name',
        'phone_mobile',
        'email'
    ],
    customEvent: {
        'change input[name=method_of_sale]': '_methodOfSaleChange'
    },
    initialize: function (opts) {
        this.events = _.extend({}, this.events, this.customEvent);
        this._super('initialize', [opts]);
    },
    _buildGridsFromPanelsMetadata: function (panels) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: '_buildGridsFromPanelsMetadata',
            args: [panels]
        });
        this._disableFields();
    },
    _disableFields: function () {
        var self = this;
        _.each(this.disabledFields, function (field) {
            self.noEditFields.push(field);
        });
    },
    _methodOfSaleChange: function (evt) {
        if (this.$(evt.currentTarget).val() == 'Auction') {
            this.$('.LBL_RECORDVIEW_PANEL2').show();
        }
        else {
            this.$('.LBL_RECORDVIEW_PANEL2').hide();
        }
    }
})