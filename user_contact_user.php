<?php
//bean name User
$viewdefs['User']['base']['layout']['subpanels']['components'][]= array (
		  'layout' => 'subpanel',
		  'label' => 'LBL_USERS',
		  'context' =>
		  array (
		    'link' => 'user_contacts', // same name of link field as defined in Users and Contacts
		  ),
		);
