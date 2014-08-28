({
    extendsFrom: 'RecordView',
    initialize: function(options){
        this._super('initialize', [options]);
        this.on("render", this.setStagesList, this);
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
        var sc = this.model.attributes;
        if (!this.model.attributes.parent_id) {
            sc = app.restHelper.retrieveRecord(this.module, this.model.id)
        }

        var parentType = sc.parent_type;
        var parent = app.restHelper.retrieveRecord(parentType, sc.parent_id);

        switch (parentType)
        {
            case 'iems_MasterContract':
            {
                var masterContract = app.restHelper.retrieveRecord('iems_MasterContract',parent.id);
                result = app.restHelper.retrieveRecord('iems_Project', masterContract.iems_project_id);
                break;
            }
            case 'iems_Listing':
            {
                result = app.restHelper.retrieveRecord('iems_Project', parent.iems_project_id_c);
                break;
            }
            case 'Contracts':
            {
                result = app.restHelper.retrieveRecord('iems_Project', parent.iems_project_id);
                break;
            }
        }

        return result;
    }
})