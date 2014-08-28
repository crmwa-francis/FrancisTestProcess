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
    hasChanges: false,
    parentProject: null,
    revalidatedParentProject: null,
    orig_deposit_type_list: null,
    pricing: null,
    noCancel: false,
    initialize: function (opts) {
        this._super('initialize', [opts]);
        this.parentProject = _.clone(this.context.parent.get('model').attributes);
        this._revalidateParentProject();
        this.orig_deposit_type_list = _.clone(app.metadata._dev_data.app_list_strings['deposit_type_list']);
        this._handleDepositTypeWorkflow();
    },
    _handleDepositTypeWorkflow: function () {
        var depositTypeList = _.clone(this.orig_deposit_type_list);
        if (
            !this.revalidatedParentProject.property_type
                || !_.isArray(this.revalidatedParentProject.property_type)
                || _.isEmpty(this.revalidatedParentProject.property_type)
                || this.revalidatedParentProject.primary_address_state == 'NSW'
                || !_.isEmpty(_.intersection(this.revalidatedParentProject.property_type, ['house', 'land']))
                || this.pricing.settle_land_first.toLowerCase() == "yes"
            ) {
            delete depositTypeList.deposit;

        }
        if(
            !this.revalidatedParentProject.property_type
                || !_.isArray(this.revalidatedParentProject.property_type)
                || _.isEmpty(this.revalidatedParentProject.property_type)
                ||!_.isEmpty(_.intersection(this.revalidatedParentProject.property_type, ['house', 'land']))
                || this.pricing.settle_land_first == "Yes"
            ){
            delete depositTypeList.settlement;
        }
        if (this.revalidatedParentProject.primary_address_state != 'NSW') {
            delete depositTypeList.exchange;
            delete depositTypeList.holding_deposit;
        }


        app.metadata._dev_data.app_list_strings['deposit_type_list'] = depositTypeList;
    },
    _revalidateParentProject: function (dontShowMessage) {
        this.revalidatedParentProject = app.restHelper.retrieveRecord(this.parentProject._module, this.parentProject.id);
        var isPricingGood = this._getPricing();
        var msg = "The following has been changed on this project: <br />", hasChange = false,
            intersection = _.intersection(this.parentProject.property_type, this.revalidatedParentProject.property_type),
            self = this;

        if (
            this.revalidatedParentProject.property_type.length != this.parentProject.property_type.length
                || intersection.length != this.parentProject.property_type.length
            ) {
            hasChange = true;
            msg += " - Property Type field has been changed. <br />";
        }

        if (this.revalidatedParentProject.primary_address_state != this.parentProject.primary_address_state) {
            hasChange = true;
            msg += " - Address State field has been changed. <br />";
        }

        if(isPricingGood === false){
            hasChange = true;
            msg += " - Pricing Settle Land First field has been changed. <br />";
        }

        if (dontShowMessage) {
            return hasChange;
        }

        if (hasChange === true) {
            msg += "Press Cancel to reload this record or continue to use the new changes";
            this.showAlert(
                'projectDepositAlert',
                'confirmation',
                msg,
                function () {
                    self.parentProject = _.clone(self.revalidatedParentProject);
                },
                function () {
                    window.location.reload()
                },
                null
            )
        }
        this._getPricing();

    },
    _getPricing: function () {
        var tempPricing;
        if (this.revalidatedParentProject.pricing_id) {
            tempPricing = app.restHelper.retrieveRecord('iems_Pricing', this.revalidatedParentProject.pricing_id);
        }

        if (this.pricing && !_.isEmpty(this.pricing) && _.isObject(this.pricing)) {
            if (this.pricing.settle_land_first != tempPricing.settle_land_first) {
                return false;
            }
        }
        this.pricing = tempPricing;
        return true;
    },
    saveAndClose: function () {
        app.metadata._dev_data.app_list_strings['deposit_type_list'] = this.orig_deposit_type_list;
        this._super('saveAndClose');
    },

    showAlert: function (name, type, msg, confirm, cancel, close) {
        app.alert.show(name, {
            level: type,
            messages: msg,
            onConfirm: confirm,
            onCancel: cancel,
            onClose: close
        });
    },
    validateModelWaterfall: function (callback) {
        var change = this._revalidateParentProject(true);
        if (change == true) {
            var msg = 'This project record has been modified while this drawer is open.<br /> Please <strong>Reload</strong> this record before you can create any deposit record';
            this.showAlert('depositReloadError', 'error', msg, null, null, function () {
                window.location.reload()
            });
            this.noCancel = true;
            return false;
        }
        this._super('validateModelWaterfall', [callback]);
    },

    cancel: function () {
        if (this.noCancel == true) {
            return;
        }
        app.metadata._dev_data.app_list_strings['deposit_type_list'] = this.orig_deposit_type_list;
        this._super('cancel');
    }
})