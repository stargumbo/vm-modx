<?php /* Smarty version 3.1.27, created on 2016-11-10 02:20:10
         compiled from "/opt/bitnami/apps/modx/htdocs/manager/templates/default/security/user/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:921721807582449da68c630_42572965%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b76e24bb9dc1c1760b7aa50bd4e3d633f65d4ead' => 
    array (
      0 => '/opt/bitnami/apps/modx/htdocs/manager/templates/default/security/user/update.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921721807582449da68c630_42572965',
  'variables' => 
  array (
    'OnUserFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582449da692bb6_82009101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582449da692bb6_82009101')) {
function content_582449da692bb6_82009101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '921721807582449da68c630_42572965';
echo $_smarty_tpl->tpl_vars['OnUserFormPrerender']->value;?>

<div id="modx-panel-user-div"></div><?php }
}
?>