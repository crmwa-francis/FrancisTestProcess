({
    events: {"click .moduletoggle-actions a.btn": "toggleView"},
    extendsFrom: 'TogglepanelLayout',
    initialize: function(opts){
        this._super('initialize', [opts]);
    },
    showComponent: function(name, silent) {
        if (!name) return;
        if (this.componentsList[name]) {
            this.componentsList[name].render();
            this._components.push(this.componentsList[name]);
            this.$(".main-contentmodule").append(this.componentsList[name].el);
        }
        _.each(this.toggleComponents, function(comp) {
            if (comp.name == name) {
                comp.show();
            } else {
                comp.hide();
            }
        }, this);
        this.trigger('filterpanel:change', name, silent);
    }
})