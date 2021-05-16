<?php
/* Smarty version 3.1.39, created on 2021-05-15 20:13:30
  from '/srv/http/toposiciones/view/smarty/main/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a02b6a0e2218_47079370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8e79231ca0a024f971c70d9a1eaceae6604a3f' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/login.html',
      1 => 1621109606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a02b6a0e2218_47079370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109912220760a02b6a0dcb17_80366128', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_109912220760a02b6a0dcb17_80366128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_109912220760a02b6a0dcb17_80366128',
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
              <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="text" id="login-mail" class="form-control" name="login-mail" required autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label for="login-password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                <div class="col-md-6">
                  <input type="password" id="login-password" class="form-control" name="login-password">
                </div>
              </div>
              <div class="col-md-6 offset-md-4">
                <button type="submit" name="login-btn" class="btn btn-primary">
                  Login
                </button>
                <button type="submit" name="reset-btn" class="btn btn-primary">
                  Contraseña olvidada
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "body-content"} */
}
