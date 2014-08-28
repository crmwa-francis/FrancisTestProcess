<?php
class SetContactFullName
{
    public function doSet($bean, $args,$events)
    {
        $bean->full_name_c = $bean->full_name;
    }
}