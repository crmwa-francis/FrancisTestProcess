<?php

class ProjectHookHelper
{
    /**
     * @var iems_Project
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
     * @param iems_Project $bean
     * @param string $event
     * @param array $arguments
     */
    public function afterRelationshipAdd($bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->event = $event;
        $this->arguments = $arguments;

        if (strtolower($arguments['related_module']) == 'documents') {
            $this->relateRelatedDocumentToListing($arguments['related_id']);
        }
    }

    private function relateRelatedDocumentToListing($documentId)
    {
        $this->bean->load_relationship('project_projectlisting');
        $properties = $this->bean->project_projectlisting->getBeans();

        if (empty($properties)) {
            return;
        }

        /**
         * @var $properties iems_Property[]
         */
        foreach ($properties as $property) {
            $property->load_relationship('documents_iems_listing');
            $property->documents_iems_listing->add($documentId);
        }
    }
} 