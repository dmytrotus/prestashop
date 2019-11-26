<?php
/* Smarty version 3.1.33, created on 2019-11-25 14:45:03
  from 'C:\programs-dmytro-tus\xampp\htdocs\prestashop-test.loc\themes\cozastore\templates\_partials\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbdadf55e925_10646999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d4b71429c64a9902397b80365fbb5adfd0742b' => 
    array (
      0 => 'C:\\programs-dmytro-tus\\xampp\\htdocs\\prestashop-test.loc\\themes\\cozastore\\templates\\_partials\\javascript.tpl',
      1 => 1574686373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbdadf55e925_10646999 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['external'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
><?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['inline'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  <?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value) && count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vars']->value, 'var_value', false, 'var_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['var_name']->value => $_smarty_tpl->tpl_vars['var_value']->value) {
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['var_value']->value ));?>
;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php }?>


<!--===============================================================================================-->	
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/animsition/js/animsition.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/daterangepicker/moment.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/slick/slick.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/js/slick-custom.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/parallax100/parallax100.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
        $('.parallax100').parallax100();
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/MagnificPopup/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/vendor/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
custom-js/js/main.js"><?php echo '</script'; ?>
><?php }
}
