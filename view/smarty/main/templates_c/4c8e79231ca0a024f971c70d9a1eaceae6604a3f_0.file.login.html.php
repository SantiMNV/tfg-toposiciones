<?php
/* Smarty version 3.1.39, created on 2021-04-10 09:07:09
  from '/srv/http/toposiciones/view/smarty/main/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60716abd45b459_58708508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8e79231ca0a024f971c70d9a1eaceae6604a3f' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/login.html',
      1 => 1618045545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60716abd45b459_58708508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49694365860716abd4565d7_49612640', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_49694365860716abd4565d7_49612640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_49694365860716abd4565d7_49612640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <!--<h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2> -->
</div>
<div class="login-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form action="/toposiciones/login/" method="POST">
              <input type="hidden" name="login-request" value="login">
              <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="text" id="login-mail" class="form-control" name="login-mail" required autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="login-password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                <div class="col-md-6">
                  <input type="password" id="login-password" class="form-control" name="login-password" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="login-remember"> Recordar Contraseña
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Login
                </button>
                <a href="#" class="btn btn-link">
                  Contraseña olvidada
                </a>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="register-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Registrarse</div>
          <div class="card-body">
            <form action="/toposiciones/login/" method="POST">
              <input type="hidden" name="login-request" value="register">
              <div class="form-group row">
                <label for="register-mail" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="text" id="register-mail" class="form-control" name="register-mail" required autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label for="register-user" class="col-md-4 col-form-label text-md-right">Usuario</label>
                <div class="col-md-6">
                  <input type="text" id="register-user" class="form-control" name="register-user" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="register-password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                <div class="col-md-6">
                  <input type="password" id="register-password" class="form-control" name="register-password" required>
                </div>
              </div>
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Registrarse
                </button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</main>

<?php
}
}
/* {/block "body-content"} */
}
