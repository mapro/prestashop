<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 11:08:47
         compiled from "C:\xampp\htdocs\prestashop\themes\default-bootstrap\modules\blockwishlist\blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18208540c209f02db55-66692503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501b7c687a6939e92896f6f2c6f052c5c0550eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist-extra.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18208540c209f02db55-66692503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c209f06ef32_36931784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c209f06ef32_36931784')) {function content_540c209f06ef32_36931784($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
