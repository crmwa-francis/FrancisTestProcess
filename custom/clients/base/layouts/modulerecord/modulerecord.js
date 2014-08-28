({
    initialize: function (opts) {
        app.view.Layout.prototype.initialize.call(this, opts);
        this._initContext();
    },
    _initContext: function () {
        var relatedFieldId = this.context.parent.get(this.context.get('relatedFieldId'));
        if (!relatedFieldId) {
            if (app.currentParentRecord
                && app.currentParentRecord.module == this.context.parent.get('module')
                && app.currentParentRecord.id == this.context.parent.get('modelId')) {
                relatedFieldId = app.currentParentRecord[this.context.get('relatedFieldId')];
            } else {
                var parent = this._getParentModule();
                app.currentParentRecord = parent;
                app.currentParentRecord.module = this.context.parent.get('module');
                relatedFieldId = parent[this.context.get('relatedFieldId')];
            }
        }

        this.context.set('modelId', relatedFieldId);
        this.context.prepare(true);
        this.context.loadData();
    },
    _getParentModule: function () {
        var res = app.restHelper.retrieveRecord(this.context.parent.get('module'), this.context.parent.get('modelId'));
        return res;
    }
})