<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:34
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\controllers\scenes\helpers\tree\tree_node_folder_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b7334ae2a949_67778955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4527efe22b2546208bab7e26dbb2e8a7d5b605da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\controllers\\scenes\\helpers\\tree\\tree_node_folder_checkbox.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b7334ae2a949_67778955 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }
}
