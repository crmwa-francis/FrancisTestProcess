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
            if(_parent.attributes.modelId == undefined){
                return false;
            }
            var disabledFields = ["parent_type", "parent_name", "parent_id"];
            _.each(disabledFields, function (field) {
                _this.noEditFields.push(field);
            })
        }
    }
})