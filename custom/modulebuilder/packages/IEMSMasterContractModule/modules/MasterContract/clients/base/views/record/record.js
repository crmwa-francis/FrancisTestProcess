({
    extendsFrom: 'ProjectmodulerecordView',
    getParentProject: function () {
        var result = null;
        var mastercontract = this.model.attributes;
        result = app.restHelper.getRelatedRecord('iems_MasterContract', this.model.id, 'iems_mastercontract_iems_project');
        return result;
    }
})