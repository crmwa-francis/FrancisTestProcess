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
    extendsFrom: 'SubpanelListView',
    contextEvents: {
        "list:editall:fire": "toggleEdit",
        "list:editrow:fire": "editClicked",
        "list:unlinkrow:fire": "warnUnlink",
        "list:mailmerge:fire": "toggleMailMerge"
    },
    initialize: function(opts){
        this._super('initialize',[opts]);
    },
    /**
     * Triggered by the click event on the mail merge button
     * Initiate the mail merge process
     * @param model
     */
    toggleMailMerge: function(model){
        this.getEmailAddressList(model.id);
    },
    /**
     * Initiate the email drawer and populate the email address field
     * @param array to_addresses
     * <code>
     *     to_addresses = [
     *          {
     *              email: email@address.here,
     *              bean: BeanModelGoesHere
     *          },
     *     ]
     * </code>
     * @private
     */
    _openEmailDrawer: function(to_addresses){
        app.drawer.open({
            layout: 'compose',
            context: {
                create: 'true',
                module: 'Emails',
                prepopulate: {
                    to_addresses: to_addresses
                }
            }
        });
    },
    /**
     * Send HTTP request to the server to get an array of recepients
     * @param id
     */
    getEmailAddressList:function(id){
        app.alert.show('get-template-process', {
            level: 'process'
        });

        var url = app.api.buildURL('iems_Title',"mailmerge",{},
            {
                id: id
            });
        var options = {
            showAlerts:true,
            success: _.bind(function(data){
                app.alert.dismiss('get-template-process');
                if(!_.isEmpty(data) && _.isObject(data)){
                    var toAddress = [];
                    _.each(data, function(e){
                        var model = app.data.createBean(e.module);
                        model.set('id', e.id);
                        model.set('name', e.name);
                        toAddress.push( {
                            email: e.email_address,
                            bean: model,
                            name: e.name
                        });
                    });

                }
                this._openEmailDrawer(toAddress);
            },this),
            error: _.bind(function(error){
                console.log(error);
                app.alert.dismiss('get-template-process');
            },this)
        };
        app.api.call('read',url,null,options);
    }
})