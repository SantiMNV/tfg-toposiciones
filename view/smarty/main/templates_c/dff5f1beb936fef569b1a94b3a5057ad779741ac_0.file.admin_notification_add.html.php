<?php
/* Smarty version 3.1.39, created on 2021-06-05 17:11:12
  from '/srv/http/toposiciones/view/smarty/main/templates/admin_notification_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bbb030a29e91_89474599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dff5f1beb936fef569b1a94b3a5057ad779741ac' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/admin_notification_add.html',
      1 => 1622913042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bbb030a29e91_89474599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211412062260bbb030a27774_81301115', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_211412062260bbb030a27774_81301115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_211412062260bbb030a27774_81301115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<form action="/toposiciones/admin/carroussel/" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="add-request" value="add">
  <div class="form-group col-md-6 col-6 halfInput" style="padding-right: 20px;">
    <label for="input-carroussel-image">Imagen</label>
    <input type="file" class="form-control-file" id="input-carroussel-image" name="input-carroussel-image" required>
    <small id="imageHelp" class="form-text text-muted">Será la imagen que se mostrará en el carrusel.</small>
  </div>
  <div class="form-group col-md-6 col-6 halfInput ">
    <label for="input-carroussel-link">Link</label>
    <input type="text" class="form-control" id="input-carroussel-link" name="input-carroussel-link">
    <small id="linkHelp" class="form-text text-muted">El sitio a donde redirigirá al hacer click.</small>
  </div>
  <div class="form-group">
    <label for="input-carroussel-title">Título</label>
    <input type="text" class="form-control" id="input-carroussel-title" name="input-carroussel-title">
  </div>
  <div class="form-group">
    <label for="input-carroussel-subtitle">Subtítulo</label>
    <input type="text" class="form-control" id="input-carroussel-subtitle" name="input-carroussel-subtitle">
  </div>
  <div class="form-group">
    <label for="input-carroussel-order">Orden</label>
    <input type="number" class="form-control" id="input-carroussel-order" name="input-carroussel-order" value="100"
      required>
  </div>
  <div>
    <input class="btn btn-light float-left" type="reset" value="Limpiar">
    <button type="submit" class="btn btn-primary float-right">Guardar</button>
  </div>
  <br>
</form>
<?php
}
}
/* {/block "body-content"} */
}
