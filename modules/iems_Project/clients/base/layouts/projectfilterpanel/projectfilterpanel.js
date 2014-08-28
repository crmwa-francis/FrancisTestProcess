({
    extendsFrom: 'FilterpanelLayout',
    initialize: function (opts) {
        this._super('initialize', [opts]);
    },
    showComponent: function(name, silent) {
        this._super('showComponent',[name,silent]);
        this.reloadData(name);
    },
    reloadData: function (name) {
        var layout = this.componentsList[name];
        if (layout) {
            layout.context.resetLoadFlag(true);
            layout.loadData();
            layout.model = layout.context.attributes.model;
            layout._render();
        }
    }
});