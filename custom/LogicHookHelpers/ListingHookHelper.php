<?php

require_once('custom/LogicHookHelpers/UtilityHelper.php');

class ListingHookHelper
{
    private $contractTable = 'contracts';

    /**
     * @param iems_Options | iems_Promotions | iems_ContractAnnexure $record
     * @param iems_Listing $listing
     * @return bool
     */
    public function cloneRecords($record, $listing)
    {
        if (empty($record->id) || empty($listing->id) || !($listing instanceof iems_Listing)) {
            return false;
        }

        $newRecord = clone $record;
        $newRecord->parent_type = $listing->module_dir;
        $newRecord->parent_id = $listing->id;
        $newRecord->id = create_guid();
        $newRecord->new_with_id = true;
        $newRecord->save();
    }

    public function getListing($projectId)
    {
        $sq = new SugarQuery();
        $sq->from(BeanFactory::newBean('iems_Project'), array('team_security' => '()'));
        $sq->join('project_projectproperty', array('alias' => 'pr', 'team_security' => '()'));
        $sq->join('property_listings', array('relatedJoin' => 'pr', 'alias' => 'l', 'team_security' => '()'));
        $sq->select(array(array('l.name', 'name'), array('l.id', 'id')));
        $sq->where()->equals('id', $projectId);
        $sq->where()->addRaw('l.iems_property_id_c = pr.id');
        $sq->whereRaw("l.id NOT IN (select IFNULL(iems_listing_id_c,'') as id from {$this->contractTable})");
        $sq->orderBy('l.date_entered', 'DESC');
        $result = $sq->execute();
        return !empty($result) ? $result : array();
    }

    public function transferMultipleRecords($listings = array(), $records = array())
    {
        if (empty($records) || !is_array($records) || empty($listings) || !is_array($listings)) {
            return false;
        }

        foreach ($records as $record) {
            $this->transferRecord($listings, $record);
        }
    }

    public function transferRecord($listing = array(), $transferRecord)
    {
        if (empty($listing) || !is_array($listing) || empty($transferRecord->id)) {
            return false;
        }

        foreach ($listing as $row) {
            if (!($row instanceof iems_Listing)) {
                if (empty($row['id'])) {
                    continue;
                }
                $record = BeanFactory::retrieveBean('iems_Listing', $row['id']);
            } else {
                $record = $row;
            }
            if (empty($record) || empty($record->id)) {
                continue;
            }

            $this->cloneRecords($transferRecord, $record);
        }
    }

    public function transferListingToProject($property, $project_id)
    {
        if (empty($property) || empty($property->id) || !($property instanceof iems_Property) || empty($project_id)) {
            return false;
        }

        $listing = $this->getRelatedRecord('property_listings', $property, false);
        if (empty($listing)) {
            return false;
        }
        /**@var $record iems_Listing */
        foreach ($listing as $record) {
            $this->transferIndividualListingToProject($record, $project_id);
        }
        return $listing;
    }

    /**
     * @param iems_Listing $listing
     * @param string $project_id
     * @return bool
     */
    public function transferIndividualListingToProject($listing, $project_id)
    {
        if (empty($listing->id) || !($listing instanceof iems_Listing) || empty($project_id)) {
            return false;
        }

        $listing->iems_project_id_c = $project_id;
        $listing->updatePricing = false;
        $listing->save();
        return $listing;
    }

    public function getRelatedRecord($link, $record, $returnOne = true)
    {
        if (empty($link) || empty($record->id)) {
            return false;
        }

        $record->load_relationship($link);
        if (!($record->$link instanceof Link2)) {
            return false;
        }
        if ($returnOne === false) {
            return $record->$link->getBeans();
        }
        return array_shift($record->$link->getBeans());
    }
}