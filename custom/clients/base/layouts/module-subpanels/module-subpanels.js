({
    initialize: function (opts) {
        opts = this._initOptsContext(opts);
        app.view.Layout.prototype.initialize.call(this, opts);
    },
    _initOptsContext: function (opts) {
        var ctx = opts.context;
        if (ctx.has('relatedFieldId') && ctx.get('relatedFieldId')) {
            var relatedFieldId = ctx.parent.get(ctx.get('relatedFieldId'));

            if (!relatedFieldId) {
                if (app.currentParentRecord
                    && app.currentParentRecord.module == ctx.parent.get('module')
                    && app.currentParentRecord.id == ctx.parent.get('modelId')) {
                    relatedFieldId = app.currentParentRecord[ctx.get('relatedFieldId')];
                } else {
                    var parent = this._getParentModule(ctx.parent);
                    app.currentParentRecord = parent;
                    app.currentParentRecord.module = ctx.parent.get('module');
                    relatedFieldId = parent[ctx.get('relatedFieldId')];
                }
            }

            opts.context.set('modelId', relatedFieldId);
            opts.context.prepare(true);
        }

        return opts;
    },
    _getParentModule: function (ctx) {
        ctx = ctx || this.context.parent;
        var res = app.restHelper.retrieveRecord(ctx.get('module'), ctx.get('modelId'));
        return res;
    }
})