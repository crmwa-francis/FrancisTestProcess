({
    extendsFrom: 'CreateView',
    initialize: function (options) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'create',
            method: 'initialize',
            platform: 'base',
            args: [options]
        });
        app.error.errorName2Keys['stage_message'] = 'ERR_INVALID_STAGE_MESSAGE';
        this.model.addValidationTask(
            'class_validate',
            _.bind(this._doValidateStageValue, this));
    },

    _doValidateStageValue: function (fields, errors, callback) {
        var stages = this.model.get("stages");
        if(!_.isEmpty(stages) && _.isNull(stages.match(/^[\w\-\s,]*$/))){
            errors['stages'] = errors['stages'] || {};
            errors['stages'].stage_message = true;
        }

        callback(null, fields, errors);
    }
})
