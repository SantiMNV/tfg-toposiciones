<?php
/* Smarty version 3.1.39, created on 2021-04-21 11:43:47
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607ff3d3660a90_05884392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b47d709d70c16ce23901ec0fff56e9895a372e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\admin.html',
      1 => 1618998224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607ff3d3660a90_05884392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128937772607ff3d3647c68_32592834', "body-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_128937772607ff3d3647c68_32592834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_128937772607ff3d3647c68_32592834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="full-action-button text-center">
  <a href="/toposiciones/admin/usuarios/">
    <i class="fas fa-users"></i>
    <div>Usuarios</div>
  </a>
</div>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll">
  <table
    class="table list-table table-striped table-hover table-sm table-bordered"
  >
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Id</th>
        <th scope="col">Mail</th>
        <th scope="col">Content</th>
        <th scope="col">Leido</th>
        <th scope="col">Fecha</th>
        <!-- <th scope="col"><i class="fas fa-envelope"></i></th> -->
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_admin_messages']->value, 'admin_message');
$_smarty_tpl->tpl_vars['admin_message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin_message']->value) {
$_smarty_tpl->tpl_vars['admin_message']->do_else = false;
?>
      <tr>
        <th>
          <form action="/toposiciones/admin/" method="POST">
            <input type="hidden" name="remove-request" value="remove" />
            <input
              type="hidden"
              name="remove-message"
              value="<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageId'];?>
"
            />
            <button type="submit">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </th>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageId'];?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageUserMail'];?>
</td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageUserContent'];?>
 <?php if ($_smarty_tpl->tpl_vars['admin_message']->value['messageUserContent'] == "Restore password") {?>
          <form action="/toposiciones/admin/" method="POST">
            <input type="hidden" name="changepw-request" value="change" />
            <input
              type="hidden"
              name="changepw-userMail"
              value="<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageUserMail'];?>
"
            />
            <input
              type="hidden"
              name="changepw-messageId"
              value="<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageId'];?>
"
            />
            <button type="submit">
              <i class="fas fa-key"></i>
            </button>
          </form>
          <div>
            <?php if ((isset($_smarty_tpl->tpl_vars['changepw_userMail']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['changepw_userMail']->value == $_smarty_tpl->tpl_vars['admin_message']->value['messageUserMail']) {?> Contrase??a cambiada: <?php if ((isset($_smarty_tpl->tpl_vars['newpw']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['newpw']->value;?>


            <a
              href="mailto:<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageUserMail'];?>
?subject=Contrase??a reestablecida&body=Su nueva contrase??a es: <?php echo $_smarty_tpl->tpl_vars['newpw']->value;?>
 "
              ><i class="fas fa-envelope"></i>
            </a>
            <?php }?> <?php }?> <?php }?>
          </div>
          <?php }?>
        </td>
        <td class="text-center">
          <form action="/toposiciones/admin/" method="POST">
            <input type="hidden" name="readed-request" value="readed" />
            <input
              type="hidden"
              name="read-message"
              value="<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageId'];?>
"
            />
            <input
              type="hidden"
              name="read-readed"
              value="<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['readed'];?>
"
            />
            <button type="submit">
              <?php if ($_smarty_tpl->tpl_vars['admin_message']->value['readed']) {?>
              <i class="fas fa-check-circle"></i>
              <?php } else { ?>
              <i class="fas fa-times-circle"></i>
              <?php }?>
            </button>
          </form>
        </td>
        <td style="min-width: 100px"><?php echo $_smarty_tpl->tpl_vars['admin_message']->value['created_at'];?>
</td>
        <!-- 
        <td>
          <a
            href="mailto:<?php echo $_smarty_tpl->tpl_vars['admin_message']->value['messageUserMail'];?>
?Subject=Reseteo de contrase??a
            &body=Buenos dias desde toposiciones, quieres una nueva contrase??a?"
          >
            <i class="fas fa-envelope"></i>
          </a>
        </td>
        -->
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
/* {/block "body-content"} */
}
