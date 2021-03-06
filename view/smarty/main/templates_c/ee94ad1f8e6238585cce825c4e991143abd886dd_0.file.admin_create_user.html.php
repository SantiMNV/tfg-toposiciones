<?php
/* Smarty version 3.1.39, created on 2021-04-21 09:38:56
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\admin_create_user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607fd690f12ab9_43338428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee94ad1f8e6238585cce825c4e991143abd886dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\admin_create_user.html',
      1 => 1618990736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607fd690f12ab9_43338428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270845940607fd690f0c464_88050447', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1270845940607fd690f0c464_88050447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1270845940607fd690f0c464_88050447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
function showPassword() {
  let pwInput = document.getElementById("input-password");
  if (pwInput.type === "password") {
    pwInput.type = "text";
    pwInput.parentElement.getElementsByTagName("i")[0].className = pwInput.parentElement.getElementsByTagName("i")[0].className.replace("fa-eye-slash","fa-eye");
  } else {
    pwInput.type = "password";
    pwInput.parentElement.getElementsByTagName("i")[0].className =  pwInput.parentElement.getElementsByTagName("i")[0].className.replace("fa-eye","fa-eye-slash");
  }
}
/*
function randomPassword() {
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890;%';
  $pass = array(); //remember to declare $pass as an array
  $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
  for ($i = 0; $i < 20; $i++) {
    $n = rand(0, $alphaLength);
    $pass[] = $alphabet[$n];
  }
  return implode($pass); //turn the array into a string
}
*/
function randomPassword() {
  let alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789;%";
  let alphabetLength = alphabet.length;
  let pass = "";
  for (let i = 0;i < 12; i++) {
    pass += alphabet.charAt(Math.floor(Math.random() * alphabet.length));
  }
  document.getElementById("input-password").value = pass;
  return pass;
}
<?php echo '</script'; ?>
>
<div class="page-header">
  <!-- <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2> -->
</div>

<div class="register-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Crear Usuario</div>
          <div class="card-body">
            <form action="/toposiciones/admin/crear/" method="POST">
              <input type="hidden" name="register-request" value="register">
              <div class="form-group row">
                <label for="register-mail" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input type="text" id="register-mail" class="form-control" name="register-mail" required autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label for="register-user" class="col-md-4 col-form-label text-md-right">
                Nombre
                </label>
                <div class="col-md-6">
                  <input type="text" id="register-user" class="form-control" name="register-user" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="register-level" class="col-md-4 col-form-label text-md-right">Nivel Acceso</label>
                <div class="col-md-6">
                  <input type="number" id="register-access" class="form-control" name="register-access" required min="0" max="10" step="1" value="0" >
                </div>
              </div>
              <div class=" form-group row">
                <label for="register-password" class="col-md-4 col-form-label text-md-right">Contrase??a</label>
                <div class="input-group col-md-6">
                  <input type="password" id="input-password" class="form-control" name="register-password" required>
                  <div class="input-group-append">
                    <div class="input-group-text" onclick="showPassword()"><i class="fas fa-eye-slash"></i></div>
                    <div class="input-group-text" onclick="randomPassword()">
                    <i class="fas fa-key"></i></div> 
                  </div >
                </div>
              </div>
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Registrar
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
