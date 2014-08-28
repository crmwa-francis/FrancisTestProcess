({
    extendsFrom: 'ProjectmodulerecordView',
    disabledFields: [
        'company_name',
        'first_name',
        'last_name',
        'phone_mobile',
        'email'
    ],
    customEvent: {
        'change input[name=method_of_sale]': '_methodOfSaleChange'
    },
    initialize: function (opts) {
        this.events = _.extend({}, this.events, this.customEvent);
        this._super('initialize', [opts]);
        this.on('render', function () {
            this._hideAuctionPanel(this.model.get('method_of_sale'));
        }, this);
    },
    getParentProject: function () {
        var pdo = this.model.attributes || {};
        if(!pdo || !pdo.iems_pricing_id_c){
            pdo = app.restHelper.retrieveRecord(this.module, this.context.get('modelId'));
        }
        if(!pdo || !pdo.iems_pricing_id_c){
            return {stage:''};
        }
        var pricing = app.restHelper.retrieveRecord('iems_Pricing',pdo.iems_pricing_id_c);
        if (!pricing || !pricing.project_id) {
            return {stages: ''};
        }
        return app.restHelper.retrieveRecord('iems_Project', pricing.project_id);
    },
    _buildGridsFromPanelsMetadata: function (panels) {
        app.view.invokeParent(this, {
            type: 'view',
            name: 'record',
            method: '_buildGridsFromPanelsMetadata',
            args: [panels]
        });
        this._disableFields();
    },
    _disableFields: function () {
        var self = this;
        _.each(this.disabledFields, function (field) {
            self.noEditFields.push(field);
        });
    },
    _methodOfSaleChange: function (evt) {
        this._hideAuctionPanel(this.$(evt.currentTarget).val());
    },
    _hideAuctionPanel: function (methodOfSale) {
        if (methodOfSale == 'Auction') {
            this.$('.LBL_RECORDVIEW_PANEL2').show();
        }
        else {
            this.$('.LBL_RECORDVIEW_PANEL2').hide();
        }
    }
})