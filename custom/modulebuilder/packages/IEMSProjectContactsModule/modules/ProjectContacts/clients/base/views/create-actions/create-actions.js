({
    extendsFrom: 'CreateView',
    saveAndClose: function () {
        var self = this;
        var cb = function () {
            this.updateParent();
            if (app.drawer) {
                app.drawer.close(this.context, this.model);
            }
        };

        this.initiateSave(_.bind(cb, this));
    },

    /**
     * When adding project contacts in project via subpanel automatically populate the matching role field in project`s.
     * e.g. if project_contact is a builder then the project`s builder field will also be populated by the same
     * project_contact contact record.
     */
    updateParent: function () {
        var parentModel = this.context.parent.get('model');
        var parentModule = this.context.parent.get('module');
        var contactRole = this.model.get('role');

        switch (parentModule) {
            case 'iems_Project':
            {
                switch (contactRole.toLowerCase()) {
                    case 'vendor':
                    {
                        parentModel.set('vendor', this.model.get('parent_name'));
                        parentModel.set('vendor_id', this.model.get('parent_id'));
                        break;
                    }
                    case 'builder':
                    {
                        parentModel.set('builder_name', this.model.get('parent_name'));
                        parentModel.set('builder_id', this.model.get('parent_id'));
                        parentModel.set('builder_type', this.model.get('parent_type'));
                        break;
                    }
                    case 'referral_partner':
                    {
                        parentModel.set('referrer_name', this.model.get('parent_name'));
                        parentModel.set('referrer_type', this.model.get('parent_type'));
                        parentModel.set('referrer_id', this.model.get('parent_id'));
                        break;
                    }
                }

                break;
            }
        }

        parentModel.save();
    }
})