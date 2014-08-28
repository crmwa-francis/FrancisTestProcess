({
    extendsFrom: 'SubpanelListView',
    initialize: function (options) {
        this._super('initialize', [options]);
        this.on("render", this.showWarning, this);
        this.context.on('list:revert_expiration:fire', this.revertExpiration, this);
    },

    showWarning: function () {
        if (this.collection.offset == 0) {
            return;
        }
        this.collection.forEach(function (model) {
            var expired = model.get('expired');
            if (expired.length != 0) {
                var rowName = model.module + "_" + model.get("id");
                var curr = this.$("tr[name='" + rowName + "']").addClass("warning");
            }

        });
    },

    revertExpiration: function (model) {
        var rowName = model.module + "_" + model.get("id");
        var expired = model.get('expired')
        var curr = this.$("tr[name='" + rowName + "']");
        if (expired.length != 0) {
            model.set({expired: ""});
            model.save();
            this.bindDataChange();
            if (curr.hasClass("warning")) {
                curr.removeClass("warning");
            }
        }
    }
})