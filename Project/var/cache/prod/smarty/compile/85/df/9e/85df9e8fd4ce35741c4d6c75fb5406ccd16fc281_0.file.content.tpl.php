<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:35
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\controllers\shop\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b7334b05c6d3_72463910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85df9e8fd4ce35741c4d6c75fb5406ccd16fc281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b7334b05c6d3_72463910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
