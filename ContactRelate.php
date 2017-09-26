<?php
//link field that links User and Contacts
// name of field should be same as the name of link field in Contacts

//$dictionary['Module name']['fields']['Field name']
$dictionary['User']['fields']['user_contacts'] = array(
  	'name'          => 'user_contacts',     //Name of the field 
    'type'          => 'link',              //A link through an explicit relationship.
    'relationship'  => 'user_contacts',     //Relationship name same as in link field of Contacts
    'module'        => 'Contacts',          //Module to which relationship is made
    'bean_name'     => 'Contact',           //Bean name of the module form which relationship is made
    'source'        => 'non-db',            //Set to 'non-db' beacuse the field value does not come from the database
    'vname'         => 'LBL_CONTACTS',      //vname pointing to the label of field
    );
