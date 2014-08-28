<?php

class DocumentHookHelper
{
    /**
     * @var Document
     */
    private $bean;
    /**
     * @var string
     */
    private $event;
    /**
     * @var array
     */
    private $arguments;


    /**
     * @param Document $bean
     * @param $event
     * @param $arguments
     */
    public function beforeSave($bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->even = $event;
        $this->arguments = $arguments;
        if(!empty($_REQUEST['dont_run_workflow']) && $_REQUEST['dont_run_workflow'] === true){
            return;
        }
        $this->createRevisionIfFileAlreadyExists();
    }

    /**
     * @see ICAB-8
     * related documents to Listing
     */
    public function afterRelationshipAdd($bean, $event, $arguments){
        if($_REQUEST['return_module'] != 'iems_Project'){
            return false;
        }
        $this->bean = $bean;
        $this->event = $event;
        $this->arguments = $arguments;
        if(strtolower($this->arguments['related_module']) != 'documents'){
            return false;
        }
        $this->relateDocumentsToListing($this->get_allRelatedListing($this->bean->id), BeanFactory::retrieveBean($this->arguments['related_module'], $this->arguments['related_id']));

    }

    private function get_allRelatedListing($projectId){
        $sql = new SugarQuery();
        $sql->from(BeanFactory::newBean('iems_Project'));
        $sql->join('project_projectproperty', array('alias' => 'pr'));
        $sql->join('property_listings', array('relatedJoin' => 'pr', 'alias' => 'l'));
        $sql->distinct(true);
        $sql->select(array('l.id'));
        $sql->where()->equals('l.iems_project_id_c', $projectId);
        $result = $sql->execute();
        return !empty($result) ? $result : array();
    }

    private function relateDocumentsToListing($listingID, $documentsRecord){
        $link = 'documents_iems_listing';
        $documentsRecord->load_relationship($link);
        if(!($documentsRecord->$link instanceof Link2)){
            return;
        }
        $relMod = $documentsRecord->$link->add($listingID);
    }


    /**
     * @see IEMS-260
     */
    private function createRevisionIfFileAlreadyExists()
    {
        if (!isset($_REQUEST['return_module']) || strtolower($_REQUEST['return_module']) != 'iems_listing') {
            return;
        }
        /**@var $listing iems_Listing */
        $listing = BeanFactory::getBean($_REQUEST['return_module'], $_REQUEST['return_id']);
        // we get the Related Documents for the listing
        if (!empty($listing->id) && ($documentList = $listing->getRelatedRecords('documents_iems_listing')) !== false) {
            $hasMatchingRecord = false;
            /**@var $document Document */
            foreach ($documentList as $document) {
                //Bug 0001: on the retrieve we are also retrieving the new document id
                //          add a condition that will prevent the new document from being parsed
                if($document->id == $this->bean->id){
                    continue;
                }

                //get the old document revision and check if the filename for the old document revision
                //and the new document revision are the same.
                //Bug 0002: added strtolower to prevent upper case and lower case problems when comparing names
                $dr = new DocumentRevision();
                $dr->retrieve($document->document_revision_id);
                if (empty($dr) || empty($dr->id) || strtolower($dr->filename) != strtolower($this->bean->filename)) {
                    continue;
                }

                //set the hasMatchedRecord flag to true so we don't perform save later on
                $hasMatchingRecord = true;

                //Set 'dont_run_workflow' flag so this same workflow won't be triggered by the document save
                //Update the document revision Id to the newly created revision.
                $_REQUEST['dont_run_workflow'] = true;
                $document->document_revision_id = $this->bean->document_revision_id;
                $document->save();
                //Get the new revision and set its document ID to the document ID
                $dr->retrieve($this->bean->document_revision_id);
                if(empty($dr) || empty($dr->id) || $dr->id != $document->document_revision_id){
                    continue;
                }
                $dr->revision = $document->revision += 1;
                $dr->change_log = 'Updated by Listing: '.$listing->name;
                $dr->document_id = $document->id;
                $dr->save();

            }

            if ($hasMatchingRecord === true) {
                $redirect = 'module=' . $_REQUEST['return_module'] . '&record=' . $_REQUEST['return_id'];
                $route = buildSidecarRoute($_REQUEST['return_module'], $_REQUEST['return_id']);
                $script = navigateToSidecar($route);
                echo '<script>' . $script . '</script>';
                exit();
            }
        }
    }

}