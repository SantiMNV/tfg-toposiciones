<?php
/* Smarty version 3.1.39, created on 2021-04-21 09:52:28
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\admin_users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607fd9bc49d505_80454347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665d0fb8ba3faad5a4c03bc654c228351a3132bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\admin_users.html',
      1 => 1618991546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607fd9bc49d505_80454347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1901125387607fd9bc48a022_46782226', "body-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1901125387607fd9bc48a022_46782226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1901125387607fd9bc48a022_46782226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="full-action-button text-center">
  <a href="/toposiciones/admin/crear/">
    <i class="fas fa-plus-circle"></i>
    <div>Crear usuario</div>
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
        <th scope="col">Acceso</th>
        <th scope="col">Mail</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha Registro</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
      <tr>
        <th>
          <form action="/toposiciones/admin/usuarios/" method="POST">
            <input type="hidden" name="remove-request" value="remove" />
            <input type="hidden" name="remove-user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
" />
            <button type="submit">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </th>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['access_level'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
        <td style="min-width: 100px"><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_start_date'];?>
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
/* {/block "body-content"} */
}
