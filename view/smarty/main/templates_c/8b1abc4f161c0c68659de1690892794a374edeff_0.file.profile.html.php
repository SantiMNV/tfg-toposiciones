<?php
/* Smarty version 3.1.39, created on 2021-04-19 12:09:29
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\profile.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d56d9041a37_23645943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b1abc4f161c0c68659de1690892794a374edeff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\profile.html',
      1 => 1618817238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d56d9041a37_23645943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1843954963607d56d9036b99_61245355', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1843954963607d56d9036b99_61245355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1843954963607d56d9036b99_61245355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<?php if ((isset($_SESSION['login_user']))) {?>
<div class="edit-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Configuración de cuenta</div>
          <div class="card-body">
            <form action="/toposiciones/profile/" method="POST">
              <input type="hidden" name="edit-request" value="edit">
              <div class="form-group row">
                <label for="login-mail" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="text" id="login-mail" class="form-control" name="login-mail" readonly
                    value="<?php echo $_SESSION['login_mail'];?>
">
                </div>
              </div>
              <div class="form-group row">
                <label for="login-user" class="col-md-4 col-form-label text-md-right">Usuario</label>
                <div class="col-md-6">
                  <input type="text" id="login-user" class="form-control" name="login-user"
                    value="<?php echo $_SESSION['login_user'];?>
">
                </div>
              </div>
              <div class="form-group row">
                <label for="login-password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                <div class="col-md-6">
                  <input type="password" id="login-password" class="form-control" name="login-password">
                </div>
              </div>
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Guardar
                </button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<form action="/toposiciones/profile/" method="POST">
  <input type="hidden" name="edit-request" value="logout">
  <button type="submit" class="btn btn-link btn-logout">Logout</button>
</form>
<?php } else { ?>
<p>Usuario no identificado, hágalo desde: <a href="/toposiciones/login/">Login</a></p>
<?php }?>

<?php
}
}
/* {/block "body-content"} */
}
