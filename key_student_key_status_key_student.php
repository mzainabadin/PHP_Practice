<?php

$dictionary["key_student"]["fields"]["key_student_key_status"] = array (
  'name' => 'key_student_key_status',			//Name of the field
  'type' => 'link',								//type is defined as link through an explicit relationship.
  'relationship' => 'key_student_key_status',	//relationship name
  'source' => 'non-db',							//Set to 'non-db' beacuse the field value does not come from the database
  'module' => 'key_status',						//Module to which relationship is made
  'bean_name' => 'key_status',					//Bean name of the module form which relationship is made
  'vname' => 'LBL_KEY_STUDENT_KEY_STATUS_FROM_KEY_STATUS_TITLE', //vname pointing to the label of field
  'id_name' => 'key_student_key_statuskey_status_idb',			// the field from the bean that stores the ID for the related bean
);