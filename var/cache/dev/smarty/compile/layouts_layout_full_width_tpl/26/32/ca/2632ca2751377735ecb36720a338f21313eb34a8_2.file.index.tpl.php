<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:02
  from 'C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc\themes\cozastore\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdadee4f3c3_26711270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2632ca2751377735ecb36720a338f21313eb34a8' => 
    array (
      0 => 'C:\\programs-dmytro-tus\\xampp\\htdocs\\prestashop-test.loc\\themes\\cozastore\\templates\\index.tpl',
      1 => 1574670091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdadee4f3c3_26711270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5556373295ddbdadee4dad3_95646165', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'hook_home'} */
class Block_4679912305ddbdadee4e092_38748880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

  <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5556373295ddbdadee4dad3_95646165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_5556373295ddbdadee4dad3_95646165',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4679912305ddbdadee4e092_38748880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4679912305ddbdadee4e092_38748880', 'hook_home', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
