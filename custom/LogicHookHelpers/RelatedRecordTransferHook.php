<?php

class RelatedRecordTransferHook
{
    /**
     * @var iems_Options | iems_Promotions | iems_ContractAnnexure
     */
    private $bean;
    private $arguments = array();
    private $event;

    /**
     * @var ListingHookHelper
     */
    private $helper;

    public function transferRelatedRecords($bean, $events, $arguments)
    {
        $this->bean = $bean;
        $this->arguments = $arguments;
        $this->event = $events;
        $this->initHelper();
        $this->processTransfer();
    }

    private function initHelper()
    {
        if ($this->helper instanceof ListingHookHelper) {
            return $this->helper;
        }
        $path = 'custom/LogicHookHelpers/ListingHookHelper.php';
        if (SugarAutoLoader::fileExists($path)) {
            require_once $path;
            $this->helper = new ListingHookHelper();
        }

    }

    private function processTransfer()
    {
        if ($this->validation() === false) {
            return;
        }
        switch (strtolower($this->arguments['module'])) {
            case 'iems_project':
                if (strtolower($this->arguments['related_module']) != 'iems_property' && strtolower($this->arguments['related_module']) != 'iems_listing') {
                    $this->helper->transferRecord($this->helper->getListing($this->bean->id), BeanFactory::retrieveBean($this->arguments['related_module'], $this->arguments['related_id']));
                } else {
                    // transfer options to listing
                    $listing = $this->helper->transferListingToProject(BeanFactory::getBean('iems_Property', $this->arguments['related_id']), $this->bean->id);
                    if (empty($listing)) {
                        continue;
                    }
                    $this->helper->transferMultipleRecords($listing, $this->helper->getRelatedRecord('iems_project_iems_options', $this->bean, false));
                    //transfer promotions
                    $this->helper->transferMultipleRecords($listing, $this->helper->getRelatedRecord('promotion-pricing', $this->helper->getRelatedRecord('iems_project_iems_pricing', $this->bean), false));
                    //transfer contract annexure
                    $this->helper->transferMultipleRecords($listing, $this->helper->getRelatedRecord('iems_mastercontract_iems_contractannexure', $this->helper->getRelatedRecord('iems_mastercontract_iems_project', $this->bean), false));
                }
                break;
            case 'iems_pricing':
            case 'iems_mastercontract':
                $link = strtolower($this->arguments['module']) == 'iems_pricing' ? 'iems_project_iems_pricing' : 'iems_mastercontract_iems_project';
                $project = $this->helper->getRelatedRecord($link, $this->bean);
                if (!empty($project->id)) {
                    $this->helper->transferRecord($this->helper->getListing($project->id), BeanFactory::retrieveBean($this->arguments['related_module'], $this->arguments['related_id']));
                }
                break;
            case 'iems_property':
                if (strtolower($this->arguments['related_module']) != 'iems_listing') {
                    return false;
                }
                $project = $this->helper->getRelatedRecord('project_projectproperty', $this->bean);
                $listing = BeanFactory::retrieveBean($this->arguments['related_module'], $this->arguments['related_id']);
                if (!empty($project->id) && !empty($listing->id)) {
                    $listing = array($listing);
                    $this->helper->transferMultipleRecords($listing, $this->helper->getRelatedRecord('iems_project_iems_options', $project, false));
                    //transfer promotions
                    $this->helper->transferMultipleRecords($listing, $this->helper->getRelatedRecord('promotion-pricing', $this->helper->getRelatedRecord('iems_project_iems_pricing', $project), false));
                    //transfer contract annexure
                    $this->helper->transferMultipleRecords($listing, $this->helper->getRelatedRecord('iems_mastercontract_iems_contractannexure', $this->helper->getRelatedRecord('iems_mastercontract_iems_project', $project), false));
                }
                break;
        }
    }

    private function validation()
    {
        if ($this->event != 'after_relationship_add') {
            throw new SugarApiExceptionInvalidParameter('This logic hook is only for the after relationship logic hook to use', null, 'iems_Project', 551);
        }
        if (empty($this->arguments)) {
            throw new SugarApiExceptionInvalidParameter('Missing relationship arguments', null, 'iems_Project', 551);
        }

        if (!($this->helper instanceof ListingHookHelper)) {
            throw new SugarApiExceptionInvalidParameter('Helper file was not set, please contact your administrator', null, 'iems_Project', 551);
        }

        if ($this->validateModule() === false) {
            return false;
        }

        if ($this->serviceChecker() === false) {
            return false;
        }
    }

    /**
     * This method checks if the related module is on the list of modules to parse
     * @return bool
     */
    private function validateModule()
    {
        $allowedRelatedModule = array(
            'iems_Options', 'iems_Promotion', 'iems_ContractAnnexure', 'iems_Property', 'iems_Listing'
        );
        return !in_array($this->arguments['related_module'], $allowedRelatedModule) ? false : true;
    }

    /**
     * This method is a fix for the logic hook relationship bug
     * @return bool
     */
    private function serviceChecker()
    {
        global $service;
        /**@var $service RestService */
        if ($service && $service instanceof RestService) {
            $request = $service->getRequest();
            $args = $request->getArgs();
        }
        if (!empty($args) && !empty($request) && strtolower($request->method) == 'post') {
            return true;
        }

        return false;
    }
}