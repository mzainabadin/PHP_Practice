<?php

//$dictionary["Module name"]["fields"]["link field name"]
$dictionary["key_status"]["fields"]["key_student_key_status"] = array (
  'name' => 'key_student_key_status',				//Name of the field
  'type' => 'link',									//type link is defined as link through an explicit relationship.
  'relationship' => 'key_student_key_status',		//relationship name. Same as in other link field in student
  'source' => 'non-db',								//Set to 'non-db' beacuse the field value does not come from the database
  'module' => 'key_student',						//Module to which relationship is made
  'bean_name' => 'key_student',						//Bean name of the module form which relationship is made
  'vname' => 'LBL_KEY_STUDENT_KEY_STATUS_FROM_KEY_STUDENT_TITLE',  //vname pointing to the label of field that will be visible on UI
  'id_name' => 'key_student_key_statuskey_student_ida',			// the field from the bean that stores the ID for the related bean
);