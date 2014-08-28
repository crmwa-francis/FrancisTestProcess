({
    extendsFrom: 'RecordView',
    _renderHtml: function () {
        this.setStagesList();
        this.showPreviousNextBtnGroup();
        app.view.View.prototype._renderHtml.call(this);
        this.adjustHeaderpane();
    },
    setStagesList: function () {
        var parentProject = this.getParentProject();
        var stageList = {};

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
    getParentProject: function () {
        var result = null;
        var stagemap = this.model.attributes;
        if (!this.model.attributes.iems_project_id_c) {
            stagemap = app.restHelper.retrieveRecord(this.module, this.model.id)
        }

        result = app.restHelper.retrieveRecord('iems_Project', stagemap.iems_project_id_c);
        return result;
    }
})