<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class SugarWidgetSubpanelRevertExpirationButton extends SugarWidgetField
{
    public function displayHeaderCell(&$layout_def)
    {
        return '';
    }

    public function displayList($layout_def)
    {
        $retStr = '';
        if (!empty($layout_def['fields']['EXPIRED']) && isset($layout_def['fields']['EXPIRED'])) {
            $retStr = "<a href='#' class='listViewTdToolsS1' name='revert-expiration' ";
            $retStr .= "onclick=\"parent.SUGAR.App.revertExpirationHelper.removeHighlight(this, '{$layout_def['fields']['ID']}');window.location.reload(true); return false\" ";
            $retStr .= ">Revert Expiration</a>";
        }

        return $retStr;
    }

}