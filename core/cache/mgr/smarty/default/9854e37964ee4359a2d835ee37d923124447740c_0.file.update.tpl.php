<?php /* Smarty version 3.1.27, created on 2016-11-10 02:30:33
         compiled from "/opt/bitnami/apps/modx/htdocs/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:167872905458244c49e77c61_56162354%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9854e37964ee4359a2d835ee37d923124447740c' => 
    array (
      0 => '/opt/bitnami/apps/modx/htdocs/manager/templates/default/element/plugin/update.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167872905458244c49e77c61_56162354',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58244c49e7c082_66055354',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58244c49e7c082_66055354')) {
function content_58244c49e7c082_66055354 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167872905458244c49e77c61_56162354';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>