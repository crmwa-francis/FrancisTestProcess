<?php
/**
 * Sugar doesn't automatically require this file
 */
require_once("clients/base/api/RelateApi.php");

class DocumentsToProjectApi extends RelateApi
{

    /**
     * Concatenate attach_to_contract field on documents subpanel list view
     */
    public function filterRelated(ServiceBase $api, array $args)
    {
        if(array_key_exists('fields', $args)){
            $args['fields'] .= ",attach_to_contract";
            return parent::filterRelated($api, $args);
        }
    }
}