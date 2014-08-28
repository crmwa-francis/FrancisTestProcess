<?php
class ContractsViewEdit extends ViewEdit
{
    public function display()
    {
        parent::display();
    }

    public function preDisplay()
    {
        if(isset($_REQUEST['parent_type']) && isset($_REQUEST['parent_id']))
        {
            if($_REQUEST['parent_type'] == 'iems_Project')
            {
                $this->bean->project = $_REQUEST['parent_name'];
                $this->bean->iems_project_id = $_REQUEST['parent_id'];
            }
            elseif($_REQUEST['parent_type'] == 'iems_Listing')
            {
                $this->bean->listing = $_REQUEST['parent_name'];
                $this->bean->iems_listing_id_c = $_REQUEST['parent_id'];
                $listing = BeanFactory::getBean('iems_Listing', $_REQUEST['parent_id']);

                if(isset($listing->iems_project_id_c))
                {
                    $project = BeanFactory::getBean('iems_Project', $listing->iems_project_id_c);
                    $this->bean->project = $project->name;
                    $this->bean->iems_project_id = $project->id;
                }
            }
        }

        return parent::preDisplay();
    }
}