<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 11:31:21
         compiled from "C:\xampp\htdocs\prestashop\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11597540c25e96708b2-32836247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8613f61f43d9efa2f5631378425aeac86a9fbe7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1406810506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11597540c25e96708b2-32836247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c25e96a21c1_06370265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c25e96a21c1_06370265')) {function content_540c25e96a21c1_06370265($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
