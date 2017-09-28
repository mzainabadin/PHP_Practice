<?php
$dictionary['key_status']['fields']['key_teacher_name'] = array(
            'required'  => false,                     //Required is marked as false to make sure it runs even if name is not found
            'source'    => 'non-db',                  //The language pack ID for the label of this field
            'name'      => 'key_teacher_name',        //name of the filed in status 
            'vname'     => 'LBL_KEY_TEACHER_NAME',    //vname pointing to the label of field
            'rname'     => 'name',
            'type'      => 'relate',                  //Field type is set to relate
            'id_name'   => 'key_teacher_id',          //the field from the bean that stores the ID for the related bean
            'link'      => 'status_link',             //link name that we are going to add after this in the same file
            'table'     => 'key_teacher',             //Table name of the module
            'isnull'    => 'true',                    //Whether the field can contain a null value
            'module'    => 'key_teacher',             //Module name to which we are making relationship
          );

//$dictionary['Module Name']['fields']['Field_name']
$dictionary['key_status']['fields']['key_teacher_id'] = array(
            'name'              => 'key_teacher_id',    //name of the field          
            'rname'             => 'id',
            'vname'             => 'LBL_TEACHERS_ID',   //The language pack ID for the label of this field
            'type'              => 'id',                //type of attribute
            'table'             => 'key_status',        //Table name of the module
            'module'            => 'key_status',      //Module name to which we are making relationship
            'dbType'            => 'id',           //Type of the field in database i.e in which typr database has stored the user_id
            'reportable'        => false,               //whether the field will be available in the Reports and Workflow modules
            'massupdate'        => false,               //Determines whether this field will be availabe in mass update pannel
            'duplicate_merge'   => 'disabled',
            );

$dictionary['key_status']['fields']['status_link'] = array(
            'name'          => 'status_link',               //Name of the field
            'type'          => 'link',                      //A link through an explicit relationship.
            'relationship'  => 'key_status_key_teacher',    //Relationship name
            'module'        => 'key_teacher',               //Module to which relationship is made
            'bean_name'     => 'key_teacher',               //Bean name of the module form which relationship is made
            'source'        => 'non-db',                    //Set to 'non-db' beacuse the field value does not come from the databas
            'vname'         => 'LBL_STATUS_LINK',           //vname pointing to the label of field
            );


$dictionary['key_status']['relationships']['key_status_key_teacher'] = array(
            'name' => 'key_status_key_teacher',       //Relationship name
            'lhs_module'    => 'key_status',          //Module on left i.e status
            'lhs_table'     => 'key_status',          //Table on left i.e status
            'lhs_key'     => 'key_teacher_id',        //key of the status table
            'rhs_module'    => 'key_teacher',         //Module on left i.e teacher
            'rhs_table'     => 'key_teacher',         //Table on left i.e teacher
            'rhs_key'     => 'key_status_id1',        //key of the teacher table
            'relationship_type' => 'one-to-one',      //Relationship type
            );