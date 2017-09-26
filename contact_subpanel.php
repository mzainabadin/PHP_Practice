<?php

//$layout_defs['Module name']['subpanel_setup']['link filed name']
$layout_defs['Users']['subpanel_setup']['user_contacts'] = array(
        'order' => 100,
      'module' => 'Contacts',           
      'subpanel_name' => 'default',
      'sort_order' => 'asc',
      'sort_by' => 'id',
      'title_key' => 'Test',
      'get_subpanel_data' => 'user_contacts',
    'top_buttons'       => array (
        0 => array (
            'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        1 => array (
            'widget_class' => 'SubPanelTopSelectButton',
            'mode'         => 'MultiSelect',
        ),
    ),
);