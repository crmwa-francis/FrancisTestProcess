({
    extendsFrom: 'ProjectmodulerecordView',
    getParentProject: function () {
        var result = null;
        var title = this.model.attributes;
        if (!this.model.attributes.project_id) {
            title = app.restHelper.retrieveRecord(this.module, this.model.id)
        }

        result = app.restHelper.retrieveRecord('iems_Project', title.project_id);

        return result;
    }
})