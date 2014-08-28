({
    extendsFrom: "EditablelistbuttonField",
    initialize: function(options){
        this._super('initialize', [options]);
    },

    saveClicked: function (evt) {
        this._super('saveClicked', [evt]);
        var rowName = this.model.module + "_" + this.model.get("id");
        var curr = $("tr[name='" + rowName + "']");
        var expired = this.model.get('expired');
        console.log(expired.length);
        if(expired.length > 0){
                curr.addClass("warning");
        }
    },
    _save: function() {
        var self = this,
            successCallback = function(model) {
                self.changed = false;
                self.view.toggleRow(model.id, false);
                self._refreshListView();
            },
            options = {
                success: successCallback,
                error: function(error) {
                    if (error.status == 550) {
                        app.alert.show('listing-error', {level: 'error', messages: error.message});
                        this.editClicked();
                        return false;
                    }else if (error.status === 409){
                        app.utils.resolve409Conflict(error, self.model, function(model, isDatabaseData) {
                            if (model) {
                                if (isDatabaseData) {
                                    successCallback(model);
                                } else {
                                    self._save();
                                }
                            }
                        });
                    }
                },
                complete: function() {
                    if (self.model.get('_unlinked')) {
                        self.collection.remove(self.model, {
                            silent: true
                        });
                        self.collection.trigger('reset');
                        self.view.render();
                    } else {
                        self.setDisabled(false);
                    }
                },
                lastModified: self.model.get('date_modified'),
                showAlerts: {
                    'process': true,
                    'success': {
                        messages: app.lang.get('LBL_RECORD_SAVED', self.module)
                    }
                },
                relate: this.model.link ? true : false
            };
        options = _.extend({
            params: {
                fields: this.context.get("fields")
            }
        }, options, this.getCustomSaveOptions(options));
        this.model.save({}, options);
    }
});
