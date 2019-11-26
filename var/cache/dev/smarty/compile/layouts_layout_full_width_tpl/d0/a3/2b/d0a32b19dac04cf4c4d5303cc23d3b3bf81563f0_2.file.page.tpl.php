<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:02
  from 'C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc\themes\cozastore\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdadeec27e7_55376973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a32b19dac04cf4c4d5303cc23d3b3bf81563f0' => 
    array (
      0 => 'C:\\programs-dmytro-tus\\xampp\\htdocs\\prestashop-test.loc\\themes\\cozastore\\templates\\page.tpl',
      1 => 1574670091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdadeec27e7_55376973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11745868515ddbdadeebf920_39838531', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10715706825ddbdadeec0503_17883250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_569823695ddbdadeec0199_64343733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10715706825ddbdadeec0503_17883250', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_5759712375ddbdadeebfe05_81060933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_569823695ddbdadeec0199_64343733', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_17179394795ddbdadeec1322_14675055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15893764435ddbdadeec0fa2_29970660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17179394795ddbdadeec1322_14675055', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2105164395ddbdadeec1e33_68953931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13165227055ddbdadeec1ad1_70530780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2105164395ddbdadeec1e33_68953931', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11745868515ddbdadeebf920_39838531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11745868515ddbdadeebf920_39838531',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5759712375ddbdadeebfe05_81060933',
  ),
  'page_header' => 
  array (
    0 => 'Block_569823695ddbdadeec0199_64343733',
  ),
  'page_title' => 
  array (
    0 => 'Block_10715706825ddbdadeec0503_17883250',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15893764435ddbdadeec0fa2_29970660',
  ),
  'page_content' => 
  array (
    0 => 'Block_17179394795ddbdadeec1322_14675055',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13165227055ddbdadeec1ad1_70530780',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2105164395ddbdadeec1e33_68953931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5759712375ddbdadeebfe05_81060933', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15893764435ddbdadeec0fa2_29970660', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13165227055ddbdadeec1ad1_70530780', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
