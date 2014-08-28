/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
({
    extendsFrom: 'RelateField',
    auctioneerFields: [
        'account_name',
        'first_name',
        'last_name',
        'phone_mobile',
        'email1'
    ],
    bindDataChange: function () {
        this._super('bindDataChange');
        this._customBindDataChange();
    },
    _customBindDataChange: function () {
        if (this.model) {
            this.model.on('change:' + this.name, function () {
                this.populateFields();
                if (_.isEmpty((this.$(this.fieldTag).data('select2')))) {
                    this.render();
                } else {
                    this.$(this.fieldTag).select2('val', this.model.get(this.name));
                    this.render();
                }
            }, this);
        }
    },
    populateFields: function(){
        var auctioneer = null, self = this;

        if (this.model.get('contact_id_c')) {
            auctioneer = app.restHelper.retrieveRecord('Contacts', this.model.get('contact_id_c'))
        }
        _.each(this.auctioneerFields, function(field){
            var value = '';
            if(auctioneer && auctioneer[field]){
                value = auctioneer[field];
            }
            field = field == 'email1' ? 'email' : field;
            field = field == 'account_name' ? 'company_name' : field;
            self.model.set(field, value);
        });

        console.log(auctioneer);
    }
})