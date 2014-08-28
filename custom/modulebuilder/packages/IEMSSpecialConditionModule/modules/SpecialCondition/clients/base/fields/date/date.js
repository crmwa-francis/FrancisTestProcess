({
    extendsFrom: 'DateField',
    initialize: function (options) {
        this._super('initialize', [options]);
    },
    _render: function (value) {
        this._super('_render', [value]);
        this.setBackgroundToRedIfDateIsPastToday();
    },
    setBackgroundToRedIfDateIsPastToday: function () {
        var markRedFields = ['date_expected'], date = this.dateValue;
        if (_.contains(markRedFields, this.name) && app.restHelper.isDatePast(this.model.get(this.name), 'y-m-d')) {
            $(this.el).addClass('ellipsis_inline');
            $(this.el).addClass('label');
            $(this.el).addClass('label-important');
            $(this.el).css({
                'font-size': '16px'
            });
        } else {
            $(this.el).removeClass('ellipsis_inline');
            $(this.el).removeClass('label-important');
            $(this.el).removeClass('label');
        }
    }
})