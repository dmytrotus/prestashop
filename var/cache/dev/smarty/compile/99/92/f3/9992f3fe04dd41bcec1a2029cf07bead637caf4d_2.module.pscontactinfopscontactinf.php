<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:03
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdadfa1c1b1_51123612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1573732283,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdadfa1c1b1_51123612 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact">
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tel: %phone%','sprintf'=>array('%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: %fax%','sprintf'=>array('%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: [1]%email%[/1]','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('">'),'[/1]'=>'</a>'),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<!-- end C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
