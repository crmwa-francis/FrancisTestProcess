({
    extendsFrom: 'ProjectmodulerecordView',
    initialize: function (options) {
        this._super('initialize', [options]);
    },
    getParentProject: function () {
        var attrs = this.model.attributes;

        if(app.currentParentRecord){
            attrs = app.currentParentRecord;
        }

        return attrs;
    },
    _setMeta: function () {
        var metaPanelsLen = this.meta.panels.length;
        if (this.isSubView) {
            this._hideHeaderpaneFields();
            this.meta.firstNonHeaderPanelIndex = 0;
            this.meta.panels.splice(0, 2);
        } else {
            this.meta.panels.splice(2, metaPanelsLen - 1);
        }
    },

    _doValidateStageValue: function (fields, errors, callback) {
        var stages = this.model.get("stages");
        if(!_.isEmpty(stages) && _.isNull(stages.match(/^[\w\-\s,]*$/))){
            errors['stages'] = errors['stages'] || {};
            errors['stages'].stage_message = true;
        }

        callback(null, fields, errors);
    },

    _renderHtml: function(){
        this._super("_renderHtml");
        app.error.errorName2Keys['stage_message'] = 'ERR_INVALID_STAGE_MESSAGE';
        this.model.addValidationTask(
            'validate_stage_value',
            _.bind(this._doValidateStageValue, this));
    },
    _saveModel: function () {
        var options, successCallback = _.bind(function () {
            _.each(this.context.children, function (child) {
                if (!_.isUndefined(child.attributes) && !_.isUndefined(child.attributes.isSubpanel)) {
                    if (child.attributes.isSubpanel && !child.attributes.hidden) {
                        child.attributes.collection.fetch();
                    }
                }
            });
            if (this.createMode) {
                app.navigate(this.context, this.model);
            } else if (!this.disposed) {
                this.render();
            }
        }, this);
        this.turnOffEvents(this.fields);
        options = {
            showAlerts: true,
            success: successCallback,
            error: _.bind(function (error) {
                if (error.status == 550) {
                    app.alert.show('pricing-error', {level: 'error', messages: error.message});
                    this.editClicked();
                    return false;
                } else if (error.status === 412 && !error.request.metadataRetry) {
                    this.handleMetadataSyncError(error);
                } else if (error.status === 409) {
                    app.utils.resolve409Conflict(error, this.model, _.bind(function (model, isDatabaseData) {
                        if (model) {
                            if (isDatabaseData) {
                                successCallback();
                            } else {
                                this._saveModel();
                            }
                        }
                    }, this));
                } else {
                    this.editClicked();
                }
            }, this),
            lastModified: this.model.get('date_modified'),
            viewed: true
        };
        options = _.extend({}, options, this.getCustomSaveOptions(options));
        this.model.save({}, options);
    }
})