<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 11:09:06
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18447540c20b2e33124-76739081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a3cf0a55dd054a7801d85e1ace26bb6810d3cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18447540c20b2e33124-76739081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c20b2eddcd2_66840074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c20b2eddcd2_66840074')) {function content_540c20b2eddcd2_66840074($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
