<?php /* Smarty version 3.1.27, created on 2018-04-22 17:25:33
         compiled from "C:\OpenServer\OpenServer\domains\mp55.loc\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175075adc9b5dbff884_87777801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0efebfcfbf2be8f6ae272a90ae727f4811b49862' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\mp55.loc\\setup\\templates\\footer.tpl',
      1 => 1516609485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175075adc9b5dbff884_87777801',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5adc9b5dc17064_48855964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5adc9b5dc17064_48855964')) {
function content_5adc9b5dc17064_48855964 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/OpenServer/domains/mp55.loc/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '175075adc9b5dbff884_87777801';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>