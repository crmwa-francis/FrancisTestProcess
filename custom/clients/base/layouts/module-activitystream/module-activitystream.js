({
    renderedActivities: {},
    extendsFrom: 'ActivitystreamLayoutLayout',
    initialize: function (opts) {
        this._super('initialize', [opts]);
        this._initCustom();
    },
    _initCustom: function () {
        this.context.parent.set('layout', 'record');
        this.context.prepare(true);
        this.loadData();
        this._catchSync();
    },
    _catchSync: function () {
        app.events.on("data:sync:success", this.triggerActivityReload, this);
    },
    triggerActivityReload: function(method,model,options,request){
        var options = this.context.get("collectionOptions");
        if (method != 'update' || _.isUndefined(this.context.parent)) {
            return;
        }
        if (this.context.parent.get('modelId') != model.get('id')) {
            return;
        }
        if (this.context.parent.get('module') != model.get('_module')) {
            return;
        }
        this.collection.fetch(options);
    },
})