<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:04
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdae09487f4_39032369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1573732285,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdae09487f4_39032369 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc/modules/ps_searchbar/ps_searchbar.tpl -->
<div id="search_widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
">
		<button type="submit">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.Searchbar.Shop'),$_smarty_tpl ) );?>

		</button>
	</form>
</div>
<!-- end C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
