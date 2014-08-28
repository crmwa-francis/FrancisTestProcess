<?php

/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */

$viewdefs['iems_Listing']['base']['layout']['record'] = array(
    'components' => array(
        array(
            'layout' => array(
                'components' => array(
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'view' => 'record',
                                    'primary' => true,
                                ),
                                array(
                                    'layout' => 'extra-info',
                                ),
                                array(
                                    'layout' => array(
                                        'name' => 'listingfilterpanel',
                                        'span' => 12,
                                        'last_state' => array(
                                            'id' => 'record-filterpanel',
                                            'defaults' => array(
                                                'toggle-view' => 'subpanels',
                                            ),
                                        ),
                                        'availableToggles' => array(
                                            array(
                                                'name' => 'subpanels',
                                                'label' => 'All',
                                            ),
                                            array(
                                                'name' => 'list',
                                                'icon' => 'icon-table',
                                                'label' => 'LBL_LISTVIEW',
                                            ),
                                            array(
                                                'name' => 'listing-property-record-view',
                                                'label' => 'Property'
                                            ),
                                            array(
                                                'name' => 'listing-pricing-record-view',
                                                'label' => 'Pricing'
                                            ),
                                            array(
                                                'name' => 'listing-title-record-view',
                                                'label' => 'Title'
                                            ),
                                            array(
                                                'name' => 'activitystream',
                                                'label' => 'LBL_ACTIVITY_STREAM',
                                            ),
                                        ),
                                        'components' => array(
                                            array(
                                                'layout' => 'filter',
                                                'targetEl' => '.filter',
                                                'position' => 'prepend'
                                            ),
                                            array(
                                                'layout' => 'subpanels',
                                            ),
                                            array(
                                                'layout' => 'listing-property-record-view',
                                                'context' => array(
                                                    'module' => 'iems_Property',
                                                    'relatedFieldId' => 'iems_property_id_c'
                                                )
                                            ),
                                            array(
                                                'layout' => 'listing-title-record-view',
                                                'context' => array(
                                                    'module' => 'iems_ListingTitle',
                                                    'relatedFieldId' => 'iems_listingtitle_id'
                                                )
                                            ),
                                            array(
                                                'layout' => 'listing-pricing-record-view',
                                                'context' => array(
                                                    'module' => 'iems_ListingPricing',
                                                    'relatedFieldId' => 'pricing_id'
                                                )
                                            ),
                                            array(
                                                'layout' => 'activitystream',
                                                'context' =>
                                                    array(
                                                        'module' => 'Activities',
                                                    ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'main-pane',
                            'span' => 8,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => 'sidebar',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'side-pane',
                            'span' => 4,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => array(
                                        'type' => 'dashboard',
                                        'last_state' => array(
                                            'id' => 'last-visit',
                                        )
                                    ),
                                    'context' => array(
                                        'forceNew' => true,
                                        'module' => 'Home',
                                    ),
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'dashboard-pane',
                            'span' => 4,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => 'preview',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'preview-pane',
                            'span' => 8,
                        ),
                    ),
                ),
                'type' => 'default',
                'name' => 'sidebar',
                'span' => 12,
            ),
        ),
    ),
    'type' => 'simple',
    'name' => 'base',
    'span' => 12,
);
