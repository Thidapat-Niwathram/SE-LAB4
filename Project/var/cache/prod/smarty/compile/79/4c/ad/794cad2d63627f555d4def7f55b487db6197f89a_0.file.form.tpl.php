<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:32
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\controllers\attributes_groups\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b7334882cac6_63329351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '794cad2d63627f555d4def7f55b487db6197f89a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\form\\form.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b7334882cac6_63329351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37539780565b7334882a682_77439596', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_37539780565b7334882a682_77439596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_37539780565b7334882a682_77439596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
