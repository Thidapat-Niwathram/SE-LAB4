<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-25 23:19:48
=======
/* Smarty version 4.3.1, created on 2024-02-26 14:14:05
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
  from 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65db68a4633754_07375114',
=======
  'unifunc' => 'content_65dc3a3d0f2337_83202703',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e60fad8d5761b732f6dbe85125e84093850b11' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl',
<<<<<<< HEAD
      1 => 1708877076,
=======
      1 => 1708931637,
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65db68a4633754_07375114 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc3a3d0f2337_83202703 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138054762665dc3a3d0e41d6_90628871', 'page_content');
?>


<form method="POST">
    <button type="submit" name="getlogout" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Logout",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
<<<<<<< HEAD
</form>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192203980365db68a4615d83_07211697', 'page_content');
}
/* {block 'page_content'} */
class Block_192203980365db68a4615d83_07211697 extends Smarty_Internal_Block
=======
</form><?php }
/* {block 'page_content'} */
class Block_138054762665dc3a3d0e41d6_90628871 extends Smarty_Internal_Block
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_192203980365db68a4615d83_07211697',
=======
    0 => 'Block_138054762665dc3a3d0e41d6_90628871',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['teacher_email']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Application ID</th>
                    <th>Student Email</th>
                    <th>Application Date</th>
                    <th>Teacher Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applications']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['student_email'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <form method="post">
                            <input type="hidden" id="id" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
">
                            <button type="submit" name="acknowledge" class="btn-default">
                                <i class="process-icon-save"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"รับทราบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                            </button>
                        </form>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'page_content'} */
}