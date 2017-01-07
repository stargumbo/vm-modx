<?php /* Smarty version 3.1.27, created on 2016-11-10 02:20:23
         compiled from "/opt/bitnami/apps/modx/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:413849023582449e7b9e505_00476375%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5d97c90ffa1a756cc31ed2879e4f538dca93a57' => 
    array (
      0 => '/opt/bitnami/apps/modx/htdocs/manager/templates/default/welcome.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '413849023582449e7b9e505_00476375',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582449e7ba1073_54675314',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582449e7ba1073_54675314')) {
function content_582449e7ba1073_54675314 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '413849023582449e7b9e505_00476375';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>