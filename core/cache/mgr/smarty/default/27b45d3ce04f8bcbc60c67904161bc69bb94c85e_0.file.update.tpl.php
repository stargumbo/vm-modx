<?php /* Smarty version 3.1.27, created on 2016-11-09 23:43:05
         compiled from "/home/modx/htdocs/manager/templates/default/element/tv/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9976922145824250929d4b0_64822826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b45d3ce04f8bcbc60c67904161bc69bb94c85e' => 
    array (
      0 => '/home/modx/htdocs/manager/templates/default/element/tv/update.tpl',
      1 => 1471473685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9976922145824250929d4b0_64822826',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5824250929ff25_24046093',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5824250929ff25_24046093')) {
function content_5824250929ff25_24046093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9976922145824250929d4b0_64822826';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>