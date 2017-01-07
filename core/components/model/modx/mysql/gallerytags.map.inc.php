<?php
$xpdo_meta_map['GalleryTags']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'gallery_tags',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'item' => 0,
    'tag' => '',
  ),
  'fieldMeta' => 
  array (
    'item' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'tag' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'item' => 
    array (
      'alias' => 'item',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'item' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'tag' => 
    array (
      'alias' => 'tag',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'tag' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
