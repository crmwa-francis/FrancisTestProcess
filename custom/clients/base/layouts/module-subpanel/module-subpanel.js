({
    extendsFrom: 'SubpanelLayout',
    rerender: false,
    initialize: function (opts) {
        this._super('initialize', [opts]);
        if (this.context.parent.has('relatedFieldId') && this.context.parent.get('relatedFieldId')) {
            this.context.loadData();
        }
        this.on('render', function(){
            var filterPanelLayout = this.layout;
            if (filterPanelLayout && !filterPanelLayout.disposed && this.collection) {
                this.collection.fetch(this.collection._byId);
            }
        },this);
    }
})