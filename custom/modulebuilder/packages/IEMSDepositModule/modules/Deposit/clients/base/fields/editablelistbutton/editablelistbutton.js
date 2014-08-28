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
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/
({
    extendsFrom: 'EditablelistbuttonField',
    saveClicked: function (evt) {
        if(app.depositHelper.beforeSaveRevalidation() == false){
            this.cancelClicked(null);
        }
        this._super('saveClicked',[evt]);
    },
    cancelClicked: function (evt) {
        if (app.depositHelper.noCancel == true) {
            return;
        }
        app.metadata._dev_data.app_list_strings['deposit_type_list'] = app.depositHelper.getOriginalModuleDropdown();
        app.depositHelper.reset();
        this._super('cancelClicked');
    }
})