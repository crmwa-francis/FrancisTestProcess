({
    extendsFrom: 'ParentField',
    /**
     * Override the parent field and added a code that would parse the populate list values
     * @TODO Report this to SugarCRM as a bug
     * @TODO Retrieve related models fields
     * @param model
     */
    setValue: function (model) {
//        console.log("Project Contacts Parent Model");
//        console.log(model);

        if(_.isUndefined(this.model.attributes.id)){
            this.model.set({
                email1: "",
                phone_mobile: "",
                phone_office: ""
            });
        }

        this._super('setValue', [model]);
        this._populateList(model);
    },
    _populateList: function (model) {
        if (!model) {
            return;
        }
        var silent = model.silent || false, fields = {};

        if (model._module == "Accounts") {
            fields = {
                email1: 'email1',
                phone_alternate: 'phone_mobile',
                phone_office: 'phone_office'
            };
        }

        if (model._module == "Contacts") {
            fields = {
                email1: 'email1',
                phone_mobile: 'phone_mobile',
                phone_work: 'phone_office'
            }
        }

        if (!_.isEmpty(fields)) {
            _.each(fields, function (target, source) {
                source = _.isNumber(source) ? target : source;
                if (!_.isUndefined(model[source]) && app.acl.hasAccessToModel('edit', this.model, target)) {
                    this.model.set(target, model[source], {silent: silent});
                } else {
                    this.model.set(target, '', {silent: silent});
                }
            }, this);
        }
    }
})