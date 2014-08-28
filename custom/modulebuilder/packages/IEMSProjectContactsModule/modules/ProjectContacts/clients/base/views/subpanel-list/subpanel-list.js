({
    extendsFrom: "SubpanelListView",
    initialize: function(opts){
        this._super("initialize" , [opts]);
        this.listenTo(this, "render", function(){
            var oldModels = this.context.attributes.collection.models;
            _.each(oldModels, function(i){
                i.fetch(i.attributes);
            });
        });
    }
})