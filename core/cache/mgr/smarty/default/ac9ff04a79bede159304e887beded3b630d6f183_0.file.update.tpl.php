<?php /* Smarty version 3.1.27, created on 2016-11-10 02:44:50
         compiled from "/home/modx/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:84335858358244fa2156a13_85888889%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac9ff04a79bede159304e887beded3b630d6f183' => 
    array (
      0 => '/home/modx/htdocs/manager/templates/default/element/snippet/update.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84335858358244fa2156a13_85888889',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58244fa2159795_99265206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58244fa2159795_99265206')) {
function content_58244fa2159795_99265206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '84335858358244fa2156a13_85888889';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>