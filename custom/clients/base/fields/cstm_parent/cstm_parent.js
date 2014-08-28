({
    /**
     * this.def.type_name = flex relate parent_type field name
     * this.def.name = flex relate parent_name field name
     * this.def.id_name = flex relate parent_id field name
     *
     * set parent_type on the record.php file of the field
     * Ex. 'parent_type' => 'parent_type'
     *
     * Retrieve bean name on the custom module class retrieve function
     * Update formatForApi function of the custom module with this field
     * Ex.
     *  $bean->retrieve($bean->id);
     *  $data = parent::formatForApi($bean, $fieldList, $options);
     *  return $data;
     */
    minChars: 1,
    extendsFrom: 'RelateField',
    initialize: function (opts) {
        this.fieldTag = 'input.select2[name=' + opts.def.name + ']';
        this.typeFieldTag = 'select.select2[name=' + opts.def.parent_type + ']';
        this._super("initialize", [opts]);
    },
    _render: function () {
        var result, self = this;
        this._super("_render");
        if (this.tplName === 'edit') {
            this.checkAcl('access', this.model.get(this.def.type_name));
            var inList = (this.view.name === 'recordlist') ? true : false;
            this.$(this.typeFieldTag).select2({
                dropdownCssClass: inList ? 'select2-narrow' : '',
                containerCssClass: inList ? 'select2-narrow' : '',
                width: inList ? 'off' : '100%',
                minimumResultsForSearch: 5
            }).on("change", function (e) {
                var module = e.val;
                self.checkAcl.call(self, 'edit', module);
                self.setValue({
                    id: '',
                    value: '',
                    module: module
                });
                self.$(self.fieldTag).select2('val', '');
            });
            var plugin = this.$(this.typeFieldTag).data('select2');
            if (plugin) {
                plugin.focusser.on('focus', _.bind(_.debounce(this.handleFocus, 0), this));
            }
            var domParentTypeVal = this.$(this.typeFieldTag).val();
            if (this.model.get(this.def.type_name) !== domParentTypeVal) {
                this.model.set(this.def.type_name, domParentTypeVal, {
                    silent: true
                });
                this.model.setDefaultAttribute(this.def.type_name, domParentTypeVal);
            }
            if (app.acl.hasAccessToModel('edit', this.model, this.name) === false) {
                this.$(this.typeFieldTag).select2("disable");
            } else {
                this.$(this.typeFieldTag).select2("enable");
            }
        } else if (this.tplName === 'disabled') {
            this.$(this.typeFieldTag).select2('disable');
        }
        return result;
    },
    _getRelateId: function () {
        return this.model.get(this.def.id_name);
    },
    format: function (value) {
        this.def.module = this.getSearchModule();
        var moduleString = app.lang.getAppListStrings('moduleListSingular'),
            module;
        if (this.getSearchModule()) {
            if (!moduleString[this.getSearchModule()]) {
                app.logger.error("Module '" + this.getSearchModule() + "' doesn't have singular translation.");
                module = this.getSearchModule();
            } else {
                module = moduleString[this.getSearchModule()];
            }
        }
        this.context.set("record_label", {
            field: this.name,
            label: app.lang.get(this.def.label, this.module)
        });
        this._buildRoute();
        return value;
    },
    checkAcl: function (action, module) {
        if (app.acl.hasAccess(action, module) === false) {
            this.$(this.typeFieldTag).select2("disable");
        } else {
            this.$(this.typeFieldTag).select2("enable");
        }
    },
    setValue: function (model) {
        if (model) {
            var silent = model.silent || false;
            var parent_type = this.def.type_name, parent_id = this.def.id_name, parent_name = this.def.name;

            if (app.acl.hasAccess(this.action, this.model.module, this.model.get('assigned_user_id'), this.name)) {
                if (model.module) {
                    this.model.set(parent_type, model.module, {
                        silent: silent
                    });
                    this.model.removeDefaultAttribute(parent_type);
                }
                this.model.set(parent_id, model.id, {
                    silent: silent
                });
                this.model.set(parent_name, model.value, {
                    silent: silent
                });
            }
        }
    },
    getSearchModule: function () {
        return this.model.get(this.def.type_name) || this.$(this.typeFieldTag).val();
    },
    getPlaceHolder: function () {
        return app.lang.get('LBL_SEARCH_SELECT', this.module);
    },
    unbindDom: function () {
        this.$(this.typeFieldTag).select2('destroy');
        app.view.invokeParent(this, {
            type: 'field',
            name: 'relate',
            method: 'unbindDom'
        });
    },
    bindDataChange: function () {
        this._super('bindDataChange');
        if (this.model) {
            this.model.on('change:' + this.def.type_name, function () {
                if (_.isEmpty(this.$(this.typeFieldTag).data('select2'))) {
                    this.render();
                } else {
                    this.$(this.typeFieldTag).select2('val', this.model.get(this.def.type_name));
                }
            }, this);
        }
    }
})