<?php
//$dictionary['Module Name']['fields']['Field_name']
$dictionary['key_teacher']['fields']['key_status_name'] = array(
            'required'  => false,               //Required is marked as false to make sure it runs even if name is not found
            'source'    => 'non-db',            //The language pack ID for the label of this field
            'name'      => 'key_status_name',   //name of the filed in status 
            'vname'     => 'LBL_KEY_STATUS_NAME', //vname pointing to the label of field
            'rname'     => 'name',
            'type'      => 'relate',
            'id_name'   => 'key_status_id1',    //Field type is set to relate
            'link'      => 'teacher_link',      //link name that we are going to add after this in the same file
            'table'     => 'key_status',         //Table name of the module
            'isnull'    => 'true',               //Whether the field can contain a null value
            'module'    => 'key_status',         //Module name to which we are making relationship
          );
//$dictionary['Module Name']['fields']['Field_name']
$dictionary['key_teacher']['fields']['key_status_id1'] = array(
            'name'              => 'key_status_id1',        //name of the field 
            'rname'             => 'id',                    
            'vname'             => 'LBL_STATUS_ID1',        //The language pack ID for the label of this field
            'type'              => 'id',                    //type of attribute
            'table'             => 'key_teacher',           //Table name of the module
            'module'            => 'key_teacher',           //Module name to which we are making relationship
            'dbType'            => 'id',          //Type of the field in database i.e in which typr database has stored the id
            'reportable'        => false,                 //whether the field will be available in the Reports and Workflow modules
            'massupdate'        => false,                   //Determines whether this field will be availabe in mass update pannel
            'duplicate_merge'   => 'disabled',
            );


//$dictionary['Module Name']['fields']['Field_name']
$dictionary['key_teacher']['fields']['teacher_link'] = array(
          	'name'          => 'teacher_link',               //Name of the field
            'type'          => 'link',                       //A link through an explicit relationship.
            'relationship'  => 'key_status_key_teacher',     //Relationship name 
            'module'        => 'key_status',                 //Module to which relationship is made
            'bean_name'     => 'key_status',                 //Bean name of the module form which relationship is made
            'source'        => 'non-db',                    //Set to 'non-db' beacuse the field value does not come from the databas
            'vname'         => 'LBL_TEACHER_LINK',           //vname pointing to the label of field
            );





