<?php
// at path custom/Extension/modules/Contacts/Ext/Vardefs/UserRelate.php

//$dictionary['Module Name']['fields']['Field_name']
$dictionary['Contact']['fields']['user_name'] = array(
    'required'  => false,           //Required is marked as false to make sure it runs even if name is not found
    'source'    => 'non-db',        //The language pack ID for the label of this field
    'name'      => 'user_name',     //name of the filed in contacts 
    'vname'     => 'LBL_USER_NAME', //vname pointing to the label of field
    'type'      => 'relate',        //Field type is set to relate
    'rname'     => 'last_name',     //the field from the related variable
    'id_name'   => 'user_id',       //the field from the bean that stores the ID for the related bean
    'link'      => 'user_contacts', //link name that we are going to add after this in the same file
    'module'    => 'Users',         //Module name to which we are making relationship
    );
//$dictionary['Module Name']['fields']['Field_name']
$dictionary['Contact']['fields']['user_id'] = array(
    'name'              => 'user_id',        //name of the field
    'vname'             => 'LBL_CONTACT_ID', //The language pack ID for the label of this field
    'type'              => 'id',             //type of attribute
    'isnull'            => 'true',           //Whether the field can contain a null value
    'module'            => 'Users',          //Module name to which we are making relationship
    'dbType'            => 'id',             //Type of the field in database i.e in which typr database has stored the user_id
    'reportable'        => false,            //whether the field will be available in the Reports and Workflow modules
    'massupdate'        => false,            //Determines whether this field will be availabe in mass update pannel
    'duplicate_merge'   => 'disabled',      
    );




//link field that links User and Contacts
$dictionary['Contact']['fields']['user_contacts'] = array(
    'name'          => 'user_contacts', //Name of the field
    'type'          => 'link',          //A link through an explicit relationship.
    'relationship'  => 'user_contacts', //Relationship name
    'module'        => 'Users',         //Module to which relationship is made
    'bean_name'     => 'User',          //Bean name of the module form which relationship is made
    'source'        => 'non-db',        //Set to 'non-db' beacuse the field value does not come from the database
    'vname'         => 'LBL_USER',      //vname pointing to the label of field
    );
//$dictionary['Module Name']['relationships']['Field_name']
$dictionary['Contact']['relationships']['user_contacts'] = array(
    'name'        => 'user_contacts',   //name of the field
    'lhs_module'        => 'Contacts',      
    'lhs_table'         => 'contacts',
    'lhs_key'           => 'user_id',       
    'rhs_module'        => 'Users',         //User module on right because it has primary entity
    'rhs_table'         => 'users',         //table name of the module on rights
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',  //Nature of relationship
    );
