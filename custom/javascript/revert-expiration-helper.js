(function (app) {

    app.augment("revertExpirationHelper", {

        applyHighlightToAll: function (a) {
            if ($(a).length !== 0) {
                $(a).each(function (i) {
                    console.log(i);
                    $(this).closest('tr').find('td').css('background-color', '#fcf8e3');
                });
            }
        },
        removeHighlight: function (a, id) {
            $(a).closest('tr').find('td').css('background-color', '');
            var url = app.api.buildURL('iems_SpecialCondition', 'update', {id: id, expired: ''});
            return app.api.call('update', url, {id: id, expired: ''});
        }
    }, false);

})(parent.SUGAR.App);