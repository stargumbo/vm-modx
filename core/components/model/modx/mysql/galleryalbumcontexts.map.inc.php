<?php
$xpdo_meta_map['GalleryAlbumContexts']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'gallery_album_contexts',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'album' => 0,
    'context_key' => 'web',
  ),
  'fieldMeta' => 
  array (
    'album' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'context_key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => 'web',
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'album' => 
    array (
      'alias' => 'album',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'album' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'context_key' => 
    array (
      'alias' => 'context_key',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'context_key' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
