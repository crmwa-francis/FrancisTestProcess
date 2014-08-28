({
    extendsFrom: 'CreateView',
    initialize: function(opts){
        this._super("initialize", [opts]);
    },

    setParentType: function(){
        var link = this.context.attributes.model.link;
        if(!_.isUndefined(link)){
            if(link.name == "iems_mastercontract_iems_specialcondition"){
                this.model.set({
                    'parent_type': link.bean.attributes._module,
                    'parent_id': link.bean.attributes.id
                })
            }
        }
    },

    resetDuplicateState: function(){
        this._super("resetDuplicateState");
        this.setParentType();
    }
})
