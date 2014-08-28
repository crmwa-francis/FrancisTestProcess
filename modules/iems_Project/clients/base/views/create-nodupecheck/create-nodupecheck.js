({
    extendsFrom: 'CreateActionView',
    initialize: function (opts) {
       this._super('initialize',[opts]);
        this.enableDuplicateCheck = false;
    },
})