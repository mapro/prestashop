<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 11:08:30
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\carriers\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19587540c208ec07c51-02740305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afde68028b44e9740905fc1baee8185b8ba6bf3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\carriers\\helpers\\view\\view.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19587540c208ec07c51-02740305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c208ecd1f67_26993080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c208ecd1f67_26993080')) {function content_540c208ecd1f67_26993080($_smarty_tpl) {?>

<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>"Add a new carrier"),$_smarty_tpl);?>
</h3>
	<div id="" class="row">

		<div class="alert alert-info">
			<p><?php echo smartyTranslate(array('s'=>'Your online store needs to have a proper carrier registered in PrestaShop as soon as you start shipping your products. This means sending yours parcels using your local postal service, or having a contract with a private carrier which in turn will ship your parcels to your customers. In order to have PrestaShop suggest the most adequate carrier to your customers during their order checkout process, you need to register all the carriers with which you have chosen to work.'),$_smarty_tpl);?>
</p>
			<p><?php echo smartyTranslate(array('s'=>'PrestaShop comes with a number of carrier modules that you can activate. You can also buy carrier modules on the PrestaShop Addons marketplace. Recommended modules are listed below: install the module that matches your carrier, and configure it!'),$_smarty_tpl);?>
</p>
			<p><?php echo smartyTranslate(array('s'=>'If there is no existing module for your carrier, then you can register that carrier by hand using the information that it can provide you: shipping rates, regional zones, size and weight limits, etc. Click on the "Add new carrier" button below to open the Carrier Wizard, which will help you register a new carrier in a few steps.'),$_smarty_tpl);?>
</p>
			<p><?php echo smartyTranslate(array('s'=>'Note: DO NOT register a new carrier if there already exists a module for it! Using a module will be much faster and more accurate!'),$_smarty_tpl);?>
</p>
		</div>
	
		<div class="col-lg-12">
			<form action="" id="configuration_form" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>"Create a custom carrier"),$_smarty_tpl);?>
</label>
					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarrierWizard'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>"Add new carrier"),$_smarty_tpl);?>
</a>
					<div class="col-lg-9 col-lg-offset-3">
						<p class="help-block"><?php echo smartyTranslate(array('s'=>"Use this tool to allow PrestaShop to know how an unknown carrier works. You can configure its shipping rates, its regional zones, its size and weight limits, etc."),$_smarty_tpl);?>
</p>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php if (is_null($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>"Use one of our recommended carrier modules"),$_smarty_tpl);?>
</h3>
	<p><?php echo smartyTranslate(array('s'=>"It seems there are no recommended carriers for your country."),$_smarty_tpl);?>
</p>
	<p><a href="http://www.prestashop.com/en/contribute-prestashop-localization"><?php echo smartyTranslate(array('s'=>"Do you think there should be one? Let us know!"),$_smarty_tpl);?>
</a></p>
</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

<?php }?>



<?php }} ?>
