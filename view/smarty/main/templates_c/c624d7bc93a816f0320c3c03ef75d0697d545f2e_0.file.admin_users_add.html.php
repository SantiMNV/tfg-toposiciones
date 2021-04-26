<?php
/* Smarty version 3.1.39, created on 2021-04-20 16:58:49
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\admin_users_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607eec29c40f88_29563256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c624d7bc93a816f0320c3c03ef75d0697d545f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\admin_users_add.html',
      1 => 1618930685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607eec29c40f88_29563256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355528537607eec29c3a1e6_05002871', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1355528537607eec29c3a1e6_05002871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1355528537607eec29c3a1e6_05002871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>

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

<?php echo '<script'; ?>
>
  function generatePassword() {
    let alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890;%';
    let alphabetLen = alphabet.length;
    let pw = array();

    for (let i = 0; i < 10; i++) {
        p += charset.charAt(Math.floor(Math.random() * alphabetLen));
        pw.push(p);
    }
    return retVal;
  }
<?php echo '</script'; ?>
>


<?php
}
}
/* {/block "body-content"} */
}
