({
    extendsFrom: 'ProjectmodulerecordView',
    initialize: function(opts){
      this._super('initialize',[opts]);
      this.context.on('reload:from:child', this._reloadFromChild, this);
    },
    getParentProject: function () {
        var result = null;
        var listing = this.model.attributes;
        if (!this.model.attributes.iems_project_id_c) {
            if (app.currentParentRecord && app.currentParentRecord.module == this.module && app.currentParentRecord.iems_project_id_c) {
                listing = app.currentParentRecord;
            } else {
                listing = app.restHelper.retrieveRecord(this.module, this.model.id)
            }
        }

        result = app.restHelper.retrieveRecord('iems_Project', listing.iems_project_id_c);

        return result;
    },
    _reloadFromChild: function () {
        console.log('_reloadFromChild');
        var options = {
            showAlerts: true,
            success: _.bind(function (data) {
                if (data) {
                    this.context.attributes.model.attributes = data;
                    this.model._syncedAttributes = data;
                    this.model.attributes = data;
                    this.render();
                }
            }, this),
            error: _.bind(function (error) {
                if (error.status == 412 && !error.request.metadataRetry) {
                    this.handleMetadataSyncError(error);
                } else {
                    this.editClicked();
                }
            }, this)
        };
        var url = app.api.buildURL(this.module, null, {id: this.model.get('id')});
        app.api.call("read", url, null, options);
    }
})