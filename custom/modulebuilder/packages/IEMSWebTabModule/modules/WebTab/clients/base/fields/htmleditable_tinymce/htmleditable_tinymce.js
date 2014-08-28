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
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/
({
    extendsFrom: 'HtmleditableTinymceField',
    initTinyMCEEditor: function (optConfig) {
        var self = this;
        if (_.isEmpty(this._htmleditor)) {
            var config = optConfig || this.getTinyMCEConfig();
            var __superSetup__ = config.setup;
            config.setup = function (editor) {
                if (_.isFunction(__superSetup__)) {
                    __superSetup__.call(this, editor);
                }
                self._htmleditor = editor;
                self._htmleditor.onInit.add(function (ed) {
                    self.setEditorContent(self.value);
                    $(ed.getWin()).blur(function (e) {
                        self._saveEditor();
                    });
                });
                self._htmleditor.onDeactivate.add(function (ed) {
                    self._saveEditor();
                });
                self._htmleditor.onSetContent.add(function (ed) {
                    if (self._saveOnSetContent) {
                        self._saveEditor(true);
                    }
                    self._saveOnSetContent = true;
                });
                self._htmleditor.onChange.add(function (ed, l) {
                    self._isDirty = true;
                });
            };
            config.oninit = function (inst) {
                self.context.trigger('tinymce:oninit', inst);
            };
            /**
             * Get the current field object before rendering
             * use the field object to render the tiny mce
             * @type {*|HTMLElement}
             */
            var editable = this._getHtmlEditableField();
            $(editable[0]).tinymce(config);
        }
    },
})