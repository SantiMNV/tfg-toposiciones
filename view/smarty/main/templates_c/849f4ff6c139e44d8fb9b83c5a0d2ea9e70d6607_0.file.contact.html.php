<?php
/* Smarty version 3.1.39, created on 2021-04-24 16:25:06
  from '/srv/http/toposiciones/view/smarty/main/templates/contact.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60844662be6011_30185914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849f4ff6c139e44d8fb9b83c5a0d2ea9e70d6607' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/contact.html',
      1 => 1618992954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60844662be6011_30185914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59370972060844662be0aa6_10475601', "body-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_59370972060844662be0aa6_10475601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_59370972060844662be0aa6_10475601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<form action="/toposiciones/contacto/" method="POST">
  <input type="hidden" name="send-request" value="send" />
  <div class="form-group col-md-6 col-6 float-left">
    <label for="input-contact-mail">E-Mail</label>

    <input type="email" class="form-control" id="input-contact-mail"
    name="input-contact-mail" placeholder="Introduce tu email" required <?php if ((isset($_SESSION['login_mail']))) {?> value="<?php echo $_SESSION['login_mail'];?>
"
    <?php }?> />
  </div>
  <div class="form-group col-md-6 col-6 float-left">
    <label for="input-contact-name">Nombre</label>
    <input type="text" class="form-control" name="input-contact-name"
    id="input-contact-name" placeholder="Introduce tu nombre" required <?php if ((isset($_SESSION['login_user']))) {?> value="<?php echo $_SESSION['login_user'];?>
"
    <?php }?> />
  </div>
  <small class="form-text text-muted">
    Nunca compartiremos tus datos, puedes consultar la política en
    <a href="/toposiciones/privacidad/ ">privacidad.</a>
  </small>
  <br />
  <div class="form-group">
    <label for="input-contact-message">Mensaje</label>
    <textarea
      class="form-control"
      id="input-contact-message"
      name="input-contact-message"
      rows="3"
    ></textarea>
  </div>
  <br />
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
}
}
/* {/block "body-content"} */
}
