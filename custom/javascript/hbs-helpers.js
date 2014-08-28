/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/**
 * Handlebars helpers.
 *
 * These functions are to be used in handlebars templates.
 * @class Handlebars.helpers
 * @singleton
 */
(function (app) {
    Handlebars.registerHelper('padWithZero', function (num, width) {
        var z = "0";
        num = num + "";
        return num.length >= width ? num : new Array(width - num.length + 1).join(z) + num;
    });

    Handlebars.registerHelper('ifEqual', function (var1, var2, options) {
        if (var1 == var2) {
            return options.fn(this);
        } else {
            return options.inverse(this);
        }
    });

    Handlebars.registerHelper('debug', function (debugValue) {
        console.log("debugValue");
        console.log("====================");
        console.log(debugValue);
    });

    Handlebars.registerHelper('activityStreamHelper', function (display, parentThis){
        var self = _.clone(parentThis);
        if(self && _.isObject(self)){
            if(!self.context.parent.parent){
                return display
            }
            var parentOfParent = self.context.parent.parent;
            if(display.object){
                display.object['id'] = parentOfParent.get('modelId');
                display.object['module'] = display.object.type = parentOfParent.get('module');
            }
            if(display.subject){
                display.subject['id'] = parentOfParent.get('modelId');
                display.subject['module']= display.object.type = parentOfParent.get('module');
            }
        }

    });

})(SUGAR.App);
