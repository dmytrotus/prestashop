<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:47:56
  from 'C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdb8ccfb731_42947307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5869935434f2bcddcb476c2f4998a7f9b47eb5e7' => 
    array (
      0 => 'C:\\programs-dmytro-tus\\xampp\\htdocs\\prestashop-test.loc\\themes\\classic\\templates\\index.tpl',
      1 => 1573732290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdb8ccfb731_42947307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16026078265ddbdb8ccf5b20_60456278', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15335852635ddbdb8ccf68e8_98377447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10483787355ddbdb8ccf8779_48189282 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_753128405ddbdb8ccf7a80_73200521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10483787355ddbdb8ccf8779_48189282', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16026078265ddbdb8ccf5b20_60456278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16026078265ddbdb8ccf5b20_60456278',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15335852635ddbdb8ccf68e8_98377447',
  ),
  'page_content' => 
  array (
    0 => 'Block_753128405ddbdb8ccf7a80_73200521',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10483787355ddbdb8ccf8779_48189282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15335852635ddbdb8ccf68e8_98377447', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753128405ddbdb8ccf7a80_73200521', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
