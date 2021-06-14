<?php
/* Smarty version 3.1.39, created on 2021-06-12 17:55:18
  from '/srv/http/toposiciones/view/smarty/main/templates/admin_user_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c4f5061f7b61_16808606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f816fd9140f7391a927fab50938ed0e6e2bc2180' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/admin_user_edit.html',
      1 => 1623176043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4f5061f7b61_16808606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36715844360c4f5061ea228_69791759', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_36715844360c4f5061ea228_69791759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_36715844360c4f5061ea228_69791759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <!-- <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2> -->
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
<div class="edit-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Editar Usuario</div>
          <div class="card-body">
            <form action="/toposiciones/admin/editar/<?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
" method="POST">
              <input type="hidden" name="edit-request" value="edit">
              <input type="hidden" id="edit-userId" class="form-control" name="edit-userId" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
" >
              <div class="form-group row">
                <label for="edit-mail" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="text" id="edit-mail" class="form-control" name="edit-mail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
"
                    required autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label for="edit-user" class="col-md-4 col-form-label text-md-right">
                  Nombre
                </label>
                <div class="col-md-6">
                  <input type="text" id="edit-user" class="form-control" name="edit-user"
                    value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="register-level" class="col-md-4 col-form-label text-md-right">Nivel Acceso</label>
                <div class="col-md-6">
                  <input type="number" id="edit-access" class="form-control" name="edit-access"
                    value="<?php echo $_smarty_tpl->tpl_vars['user']->value['access_level'];?>
" required min="0" max="10" step="1" value="0">
                </div>
              </div>
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Editar
                </button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
}
/* {/block "body-content"} */
}
