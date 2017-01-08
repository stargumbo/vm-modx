<?php /* Smarty version 3.1.27, created on 2016-11-10 02:24:31
         compiled from "/home/modx/htdocs/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:33313183458244adff09815_32881787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e0c52e7cb6ddb1fd794451c231fd81f52b056e' => 
    array (
      0 => '/home/modx/htdocs/manager/templates/default/workspaces/index.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33313183458244adff09815_32881787',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58244adff0e111_86862823',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58244adff0e111_86862823')) {
function content_58244adff0e111_86862823 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33313183458244adff09815_32881787';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>