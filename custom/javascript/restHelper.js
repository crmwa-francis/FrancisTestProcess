(function (app) {
    app.augment('restHelper', {
        /**
         * Retrieves a record based on the module and id passed.
         *
         * @param {String} module
         * @param {String} id
         * @returns {*}
         */
        retrieveRecord: function (module, id,callback) {
            var result = null;

            if (!module || !id) {
                return result;
            }

            var url = app.api.buildURL(module, '', {id: id});
            app.api.call('read', url, null, {
                    success: function (data) {
                        if(callback){
                            callback();
                        }
                        result = data;
                    }
                },
                {
                    async: false
                });

            return result;
        },

        /**
         * Fetch a single record related to this module.
         *
         * @param {String} module
         * @param {String} id
         * @param {String} linkName
         * @return {*}
         */
        getRelatedRecord: function (module, id, linkName) {
            var result = null;

            if (!module || !id || !linkName) {
                return result;
            }

            var url = app.api.buildURL(module, 'link/' + linkName, {id: id});
            app.api.call('read', url, null, {
                success: function(data){
                    result = data;
                }
            },{
                async: false

            });

            return result.records[0];
        },

        isDatePast: function (compareDate, format) {
            if(!compareDate || compareDate == '' || !format){
                return;
            }
            var compDate = this.parseDateFormat(compareDate, format);
            var today = new Date();
            compDate.setHours(0, 0, 0, 0);
            today.setHours(0, 0, 0, 0);
            if (compDate < today) {
                return true;
            } else {
                return false;
            }
        },

        parseDateFormat: function (parseDate, format) {
            var separators = ['/', '.', '-'],
                formatSplit = null,
                separatorUsed = null,
                month = year = day = null;

            for (var i = 0; i < separators.length; i++) {
                if (formatSplit instanceof Array) {
                    break;
                }
                formatSplit = format.toLowerCase().split(separators[i]);
                separatorUsed = separators[i];
                if (!(formatSplit instanceof Array) || formatSplit.length <= 1) {
                    formatSplit = separatorUsed = null;
                }
            }
            if (formatSplit instanceof Array && formatSplit.length > 1 && separatorUsed) {
                var dates = parseDate.toLowerCase().split(separatorUsed);
                for (var i = 0; i < formatSplit.length; i++) {
                    switch (formatSplit[i]) {
                        case 'd':
                        case 'dd':
                        case 'ddd':
                        case 'dddd':
                            day = dates[i];
                            break;
                        case 'm':
                        case 'mm':
                        case 'mmm':
                        case 'mmmm':
                            month = dates[i];
                            break;
                        case 'y':
                        case 'yy':
                        case 'yyy':
                        case 'yyyy':
                            year = dates[i];
                            break;
                        default:
                            break;
                    }
                }
            }

            if (month && year && day) {
                return new Date(year, (month - 1), day);
            } else {
                return new Date(parseDate);
            }
        }
    });
})(SUGAR.App);