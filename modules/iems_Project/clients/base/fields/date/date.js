({
    extendsFrom: 'DateField',
    initialize: function (options) {
        this._super('initialize', [options]);
        this.on('render', this.setBackgroundToRedIfDateIsPastToday, this);
    },
    setBackgroundToRedIfDateIsPastToday: function (options) {
        var fields = ['titles_expected', 'expected_completion','agreement_finish'];
        if (_.contains(fields,this.name) && app.restHelper.isDatePast(this.model.get(this.name), 'y-m-d')) {
            $(this.el).addClass('label');
            $(this.el).addClass('label-important');
            $(this.el).css({
                'font-size': '16px'
            });
        }else {
            $(this.el).removeClass('label');
            $(this.el).removeClass('label-important');
        }
    }
})