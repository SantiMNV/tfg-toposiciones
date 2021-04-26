<?php
/* Smarty version 3.1.39, created on 2021-04-20 16:44:08
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607ee8b8363bb8_52462867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6519b2241c324fd0c6a3f3e1d9fd8f5bf530ce2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\login.html',
      1 => 1618929794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607ee8b8363bb8_52462867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2080965260607ee8b835e666_30733520', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_2080965260607ee8b835e666_30733520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_2080965260607ee8b835e666_30733520',
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
</main>

<?php
}
}
/* {/block "body-content"} */
}
