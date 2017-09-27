<?php

//$dictionary["Relationship name"]
$dictionary["key_student_key_status"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'key_student_key_status' => 
    array (
      'lhs_module' => 'key_student',
      'lhs_table' => 'key_student',
      'lhs_key' => 'id',
      'rhs_module' => 'key_status',
      'rhs_table' => 'key_status',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'key_student_key_status_c',         //Name of the middle table. When created from studio contains "_c" at the end. But this was created manually but replicating another relationship
      
      'join_key_lhs' => 'key_student_key_statuskey_student_ida',  //We provide id_name of student here
      'join_key_rhs' => 'key_student_key_statuskey_status_idb',   //We provide id_name of status here
    ),
  ),
  'table' => 'key_student_key_status_c',                  //name of middle table
  'fields' =>                                             //fields of the middle table
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'key_student_key_statuskey_student_ida' => 
    array (
      'name' => 'key_student_key_statuskey_student_ida',
      'type' => 'id',
    ),
    'key_student_key_statuskey_status_idb' => 
    array (
      'name' => 'key_student_key_statuskey_status_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'key_student_key_statusspk',          //Primary key for the middle table
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'key_student_key_status_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'key_student_key_statuskey_student_ida',
        1 => 'key_student_key_statuskey_status_idb',
      ),
    ),
  ),
);