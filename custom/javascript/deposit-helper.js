(function (app) {
    app.augment('depositHelper', {
        /**
         * @values that will be used for this helper
         */
        parent: null,
        revalidatedParentValues: null,
        _origModStringList: null,
        pricing: null,
        noCancel: false,
        /**
         * Initialize the values
         */
        init: function (parent) {
            this.parent = _.clone(parent);
        },
        revalidateParent: function (dontShowMessage) {
            var msg = 'Revalidating Project Record';
            this.showAlert('depositInfo', 'info', msg, null, null, null);
            this._revalidateParent(dontShowMessage);
        },
        removeDropDownValues: function (dropdown) {
            if (_.isEmpty(dropdown) && (!_.isObject(dropdown) || !_.isArray(dropdown) )) {
                return;
            }
            this._setModuleDropdown(dropdown);
            return this._removeDepositDropdownValues();
        },
        getOriginalModuleDropdown: function () {
            return this._origModStringList;
        },
        beforeSaveRevalidation: function () {
            var change = this._revalidateParent(true);
            if (change == true) {
                var msg = 'This project record has been modified while this drawer is open.<br /> Please <strong>Reload</strong> this record before you can create any deposit record';
                this.showAlert('depositReloadError', 'error', msg, null, null, function () {
                    window.location.reload()
                });
                this.noCancel = true;
                return false;
            }
            return true;
        },
        showAlert: function (name, type, msg, confirm, cancel, close) {
            app.alert.show(name, {
                level: type,
                messages: msg,
                onConfirm: confirm,
                onCancel: cancel,
                onClose: close
            });
        },
        reset: function () {
            this.parent = null;
            this.revalidatedParentProject = null;
            this._origModStringList = null;
            this.pricing = null;
            this.noCancel = false;
        },
        _revalidateParent: function (dontShowMessage) {
            this.revalidatedParentValues = app.restHelper.retrieveRecord(this.parent._module, this.parent.id, function () {
                app.alert.dismiss('depositInfo')
            });

            var msg = "The following has been changed on this project: <br />", hasChange = false,
                intersection = _.intersection(this.parent.property_type, this.revalidatedParentValues.property_type),
                self = this;

            if (
                this.revalidatedParentValues.property_type.length != this.parent.property_type.length
                    || intersection.length != this.parent.property_type.length
                ) {
                hasChange = true;
                msg += " - Property Type field has been changed. <br />";
            }

            if (this.revalidatedParentValues.primary_address_state != this.parent.primary_address_state) {
                hasChange = true;
                msg += " - Address State field has been changed. <br />";
            }

            if (dontShowMessage) {
                return hasChange;
            }

            if (hasChange === true) {
                msg += "Press Cancel to reload this record or continue to use the new changes";
                this.showAlert(
                    'projectDepositAlert',
                    'confirmation',
                    msg,
                    function () {
                        self.parent = _.clone(self.revalidatedParentValues);
                    },
                    function () {
                        window.location.reload()
                    },
                    null
                )
            }
            this._getPricing();
        },
        _setModuleDropdown: function (dropdown) {
            this._origModStringList = _.clone(dropdown);
        },
        _removeDepositDropdownValues: function () {
            var depositTypeList = _.clone(this._origModStringList);
            if (
                this.revalidatedParentValues.primary_address_state == 'NSW'
                    || !_.isEmpty(_.intersection(this.revalidatedParentValues.property_type, ['house', 'land']))
                    || this.pricing.settle_land_first.toLowerCase() == "yes"
                ) {
                delete depositTypeList.deposit;
            }
            if (!_.isEmpty(_.intersection(this.revalidatedParentValues.property_type, ['house', ['land']])) || this.pricing.settle_land_first == 'Yes') {
                delete depositTypeList.settlement;
            }
            if (this.revalidatedParentValues.primary_address_state != 'NSW') {
                delete depositTypeList.exchange;
                delete depositTypeList.holding_deposit;
            }

            return depositTypeList;
        },
        _getPricing: function () {
            if (this.revalidatedParentValues.pricing_id) {
                this.pricing = app.restHelper.retrieveRecord('iems_Pricing', this.revalidatedParentValues.pricing_id);
            }
        }
    });
})(SUGAR.App);