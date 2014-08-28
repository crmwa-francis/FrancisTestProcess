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
    extendsFrom: "SubpanelHeaderView",
    adEvents: {
        'click a[name=my_email_button]:not(".disabled")': 'sendEmailButton',
    },
    initialize: function (opts)
    {
        app.view.invokeParent(this,{
            type:'view',
            name: 'panel-top',
            method: 'initialize',
            platform: 'base',
            args:[opts]
        });
        this.events = _.extend({}, this.events, this.adEvents);
    },
    sendEmailButton: function(event){
        var module = this.context.parent.get('module'),
            parentId = this.context.parent.get('modelId'),
            project_id = '';
        if(this.context.parent.parent){
            project_id = this.context.parent.parent.get('modelId');
        }
        var url = app.api.buildURL(module,"emailworkflow",{
                    id: parentId,
                    link:false
                },
                {project_id: project_id}),
            options = {
                success : _.bind(function(data){
                    app.alert.dismiss('send-email-tl');
                    if(data){
                        app.alert.show('send-email-tl',{level:'success',messages: 'The email was successfully sent'});
                    } else {
                        app.alert.show('send-email-tl',{level:'error', messages: 'The server failed to send your email'});
                    }
                },this),
                error : _.bind(function(error){
                    app.alert.dismiss('send-email-tl');
                    if(error.status == 550){
                        app.alert.show('send-email-error',{level:'error', messages: error.message});
                    }
                },this)
            };
        app.alert.show('send-email-tl',{level: 'process'});
        app.api.call('read',url,null,options);
    }

})
