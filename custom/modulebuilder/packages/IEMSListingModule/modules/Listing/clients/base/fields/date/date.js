({
    extendsFrom: 'DateField',
    initialize: function (options) {
        this._super('initialize', [options]);
        this.on('render', this.setBackgroundToRedIfDateIsPastToday, this);
    },
    setBackgroundToRedIfDateIsPastToday: function (options) {
        if(this.context.parent || _.isObject(this.context.parent)){
            if(this.context.parent.get('module') == 'iems_Property'){
                return;
            }
        }
        if ((this.name == 'titles_expected' || this.name == 'expected_completion') && app.restHelper.isDatePast(this.model.get(this.name), 'y-m-d')) {
            $(this.el).addClass('label');
            $(this.el).addClass('label-important');
            $(this.el).css({
                'font-size': '16px'
            });
        }
    }
})