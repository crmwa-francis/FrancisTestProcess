({
    extendsFrom: 'CreateView',

    initialize: function (options) {
        this._super("initialize", [options]);
        this.model.addValidationTask('stage', _.bind(this._doValidateStageValue, this));
    },

    _doValidateStageValue: function(fields, errors, callback){

        console.log(this.model.get('stage'));
        if (_.isEmpty(this.model.get('stage')) || this.model.get("stage") == 0 || this.model.get("stage") == "0")
        {
            errors['stage'] = errors['stage'] || {};
            errors['stage'].required = true;
        }

        callback(null, fields, errors);
    },


    initiateSave: function (callback) {

        this._super("initiateSave", [callback]);

    }
})