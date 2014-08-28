({
    extendsFrom: "SubpanelListView",
    initialize: function(opts){
        this._super("initialize" , [opts]);
        this.listenTo(this, "render", function(){
            _.each(this.context.attributes.collection.models, function(i){
                i.fetch(i.attributes);
            });
        });
    }
})