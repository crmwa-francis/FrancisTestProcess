({
    extendsFrom: 'EditablelistbuttonField',
    _refreshListView: function () {
        this._super('_refreshListView');
        this.reloadSpecificRow();
    },
    reloadSpecificRow: function () {
        this.model.fetch();
    }
})