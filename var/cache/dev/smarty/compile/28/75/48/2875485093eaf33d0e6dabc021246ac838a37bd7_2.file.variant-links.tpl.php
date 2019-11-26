<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:02
  from 'C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc\themes\cozastore\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdadec24635_62006014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2875485093eaf33d0e6dabc021246ac838a37bd7' => 
    array (
      0 => 'C:\\programs-dmytro-tus\\xampp\\htdocs\\prestashop-test.loc\\themes\\cozastore\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1574670091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdadec24635_62006014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3402803815ddbdadec207b0_34898719', 'variant_links');
?>

<?php }
/* {block 'variant_link_item'} */
class Block_16835588985ddbdadec21646_67731915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['variant']->value['type'] === "color") {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
        >
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      <?php
}
}
/* {/block 'variant_link_item'} */
/* {block 'variant_links'} */
class Block_3402803815ddbdadec207b0_34898719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'variant_links' => 
  array (
    0 => 'Block_3402803815ddbdadec207b0_34898719',
  ),
  'variant_link_item' => 
  array (
    0 => 'Block_16835588985ddbdadec21646_67731915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="variant-links">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16835588985ddbdadec21646_67731915', 'variant_link_item', $this->tplIndex);
?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'variant_links'} */
}
