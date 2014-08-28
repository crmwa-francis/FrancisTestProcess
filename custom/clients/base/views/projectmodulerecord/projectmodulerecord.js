({
    extendsFrom: 'RecordView',
    initialize: function (options) {
        this._super('initialize', [options]);
        if (this._isViewedFromOtherModule(options.context)) {
            this.enableHeaderPane = true;
            this.isSubView = true;
        } else {
            this.on("render", this.setStagesList, this);
        }

        this._setMeta();
    },
    setStagesList: function () {
        var parentProject = this.getParentProject();
        var stageList = {};

        if (!parentProject) {
            return stageList;
        }

        if (parentProject.stages) {
            var stages = parentProject.stages.split(',');
            var stagesLen = stages.length;
            if (stagesLen > 0) {
                for (var i = 0; i < stagesLen; i++) {
                    stageList[stages[i].trim()] = stages[i].trim();
                }
            }
        }

        app.metadata._dev_data.app_list_strings['listing_dynamic_stage_list'] = stageList;
    },
    _setMeta: function () {
        if (this.isSubView) {
            var module = this.context.get('module');
            var meta = app.metadata.getModule(module).views.record.meta;

            this.meta.panels = meta.panels;
            this.meta.templateMeta = meta.templateMeta;

            this._hideHeaderpaneFields();
        }
    },
    getParentProject: function () {
        //Do nothing. Override.
    },
    _renderHtml: function () {
        if (this._isViewedFromOtherModule()) {
            this.meta.buttons.splice(3, 1); //<----remove sidebartoggle butotn
            this.model = this.context.get('model');
            this.model.isNotEmpty = true;
        }

        app.view.View.prototype._renderHtml.call(this);
    },
    _isViewedFromOtherModule: function (ctx) {
        ctx = ctx || this.context;
        if (ctx.has('relatedFieldId') && ctx.get('relatedFieldId')) {
            return true;
        }
        return false;
    },
    _hideHeaderpaneFields: function () {
        var firstPanel = this.meta.panels[0];
        var fieldLen = firstPanel.fields.length;

        if (!firstPanel.header) return;

        firstPanel.fields.splice(0, fieldLen);
        this.meta.panels[0] = firstPanel;
    },
    _handleParentSave: function(){
        //Do nothing. Override.
    },
    handleActiveTab: function () {
        this._super('handleActiveTab');
        var activeTabHref = app.user.lastState.get(app.user.lastState.key('activeTab', this));
        var activeTab = this.$('ul a[href="' + activeTabHref + '"]');
        if (activeTabHref && activeTab) {
            this.$('div ' + activeTabHref).addClass('active').removeClass('fade');
        }
    }
})