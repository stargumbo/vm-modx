<?php /* Smarty version 3.1.27, created on 2016-11-10 02:28:45
         compiled from "/opt/bitnami/apps/modx/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:82933055658244bdd848ce0_94253631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f542babb418f301075c5ea118b58f56d349c6679' => 
    array (
      0 => '/opt/bitnami/apps/modx/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82933055658244bdd848ce0_94253631',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58244bdd8534d8_28378819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58244bdd8534d8_28378819')) {
function content_58244bdd8534d8_28378819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82933055658244bdd848ce0_94253631';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>