({
    extendsFrom: "RecordView",
    initialize: function (opts) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: 'initialize',
            platform: 'base',
            args: [opts]
        });
        this.enableDuplicateCheck = false;
    },

    _buildGridsFromPanelsMetadata: function (panels) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: '_buildGridsFromPanelsMetadata',
            args: [panels]
        });
        this.disabledFields();
    },

    disabledFields: function () {
        var _parent = this.context.parent, _this = this;
        if (_parent) {
            var disabledFields = ["parent_type", "parent_name", "parent_id"];
            _.each(disabledFields, function (field) {
                _this.noEditFields.push(field);
            })
        }
    }
})