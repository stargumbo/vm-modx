<?php
$xpdo_meta_map['UserGroupSettings']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'user_group_settings',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'group' => 0,
    'key' => NULL,
    'value' => NULL,
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => '',
    'editedon' => NULL,
  ),
  'fieldMeta' => 
  array (
    'group' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'pk',
    ),
    'key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'index' => 'pk',
    ),
    'value' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'xtype' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '75',
      'phptype' => 'string',
      'null' => false,
      'default' => 'textfield',
    ),
    'namespace' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '40',
      'phptype' => 'string',
      'null' => false,
      'default' => 'core',
    ),
    'area' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'editedon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
      'extra' => 'on update current_timestamp',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'group' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'key' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
