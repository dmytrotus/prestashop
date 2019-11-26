<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:03
  from 'C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc\themes\cozastore\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdadf9549c0_04100309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db7d41fc29a0846e80fe666460bf43bfe22ebe9' => 
    array (
      0 => 'C:\\programs-dmytro-tus\\xampp\\htdocs\\prestashop-test.loc\\themes\\cozastore\\templates\\_partials\\footer.tpl',
      1 => 1574670091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdadf9549c0_04100309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6339497905ddbdadf9506e9_76486138', 'hook_footer_before');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3550584665ddbdadf951317_01429998', 'hook_footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7277854295ddbdadf951cf6_29540463', 'hook_footer_after');
?>


<p>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18238094415ddbdadf952661_30483673', 'copyright_link');
?>

</p>
<?php }
/* {block 'hook_footer_before'} */
class Block_6339497905ddbdadf9506e9_76486138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_6339497905ddbdadf9506e9_76486138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_3550584665ddbdadf951317_01429998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_3550584665ddbdadf951317_01429998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_7277854295ddbdadf951cf6_29540463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_7277854295ddbdadf951cf6_29540463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_18238094415ddbdadf952661_30483673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_18238094415ddbdadf952661_30483673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="_blank" href="http://www.prestashop.com" target="_blank">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </a>
  <?php
}
}
/* {/block 'copyright_link'} */
}
