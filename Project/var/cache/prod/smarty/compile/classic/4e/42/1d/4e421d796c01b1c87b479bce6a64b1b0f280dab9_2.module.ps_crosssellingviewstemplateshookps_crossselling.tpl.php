<?php
/* Smarty version 4.3.1, created on 2024-02-13 23:12:29
  from 'module:ps_crosssellingviewstemplateshookps_crossselling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb94edc1b4a9_91157984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e421d796c01b1c87b479bce6a64b1b0f280dab9' => 
    array (
      0 => 'module:ps_crosssellingviewstemplateshookps_crossselling.tpl',
      1 => 1707837723,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_65cb94edc1b4a9_91157984 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featured-products clearfix mt-3">
  <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, false);
?>
</section>
<?php }
}
