<?php /* Smarty version 3.1.27, created on 2018-04-22 17:27:19
         compiled from "C:\OpenServer\OpenServer\domains\mp55.loc\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:207555adc9bc7bac8c6_39387747%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f29d0ce6f2534019278254864094378ef9fd242' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\mp55.loc\\manager\\templates\\default\\welcome.tpl',
      1 => 1516609472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207555adc9bc7bac8c6_39387747',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5adc9bc7bb1224_87189611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5adc9bc7bb1224_87189611')) {
function content_5adc9bc7bb1224_87189611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '207555adc9bc7bac8c6_39387747';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>