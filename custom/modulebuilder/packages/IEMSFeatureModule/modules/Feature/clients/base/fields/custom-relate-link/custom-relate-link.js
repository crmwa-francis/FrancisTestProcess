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
    extendsFrom: 'LinkActionField',
    events: {
        'click a[name=custom_select_button]': 'openSelectDrawerFeatureList'
    },

    openSelectDrawerFeatureList: function() {
        if (this.isDisabled()) {
            return;
        }
        var parentModel = this.context.get('parentModel'),
            linkModule = 'iems_FeatureList',
            link = 'iems_featurelist_iems_project';
        self = this;
        app.drawer.open({
            layout: 'selection-list',
            context: {
                module: linkModule,
                recParentModel: parentModel,
                recLink: link,
                recContext: this.context,
                recView: this.view
            }
        }, function(model) {
            if (!model) {
                return;
            }
            var relatedModel = app.data.createRelatedBean(parentModel, model.id, link),
                options = {
                    showAlerts: true,
                    relate: true,
                    success: function(model) {
                        self.context.get('collection').resetPagination();
                        self.context.resetLoadFlag();
                        self.context.set('skipFetch', false);
                        var collectionOptions = self.context.get('collectionOptions') || {};
                        if (collectionOptions.limit) self.context.set('limit', collectionOptions.limit);
                        self.context.loadData({
                            success: function() {
                                self.view.layout.trigger('filter:record:linked');
                            },
                            error: function(error) {
                                app.alert.show('server-error', {
                                    level: 'error',
                                    messages: 'ERR_GENERIC_SERVER_ERROR'
                                });
                            }
                        });
                    },
                    error: function(error) {
                        app.alert.show('server-error', {
                            level: 'error',
                            messages: 'ERR_GENERIC_SERVER_ERROR'
                        });
                    }
                };
            relatedModel.save(null, options);
        });
    }
})