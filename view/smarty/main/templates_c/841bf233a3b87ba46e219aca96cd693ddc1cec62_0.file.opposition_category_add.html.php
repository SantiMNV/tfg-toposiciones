<?php
/* Smarty version 3.1.39, created on 2021-06-05 15:08:58
  from '/srv/http/toposiciones/view/smarty/main/templates/opposition_category_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb938ab115b7_21082805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '841bf233a3b87ba46e219aca96cd693ddc1cec62' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/opposition_category_add.html',
      1 => 1622905735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb938ab115b7_21082805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188794825360bb938ab0c2b9_65855458', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_188794825360bb938ab0c2b9_65855458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_188794825360bb938ab0c2b9_65855458',
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
<form action="/toposiciones/convocatorias/categorias/" method="POST">
  <input type="hidden" name="add-request" value="add">
  <div class="form-group">
    <label for="input-category-name">Nombre de la categoría</label>
    <input type="text" class="form-control" id="input-category-name" name="input-category-name" required>
  </div>
  <div class="form-group">
    <label for="input-category-material">Material recomendado</label>
    <input type="text" class="form-control" id="input-category-material" name="input-category-material" required>
  </div>
  <div class="form-group">
    <label for="input-category-ambit">Ámbito al que pertenece</label><br>
    <select id="inputSearchAmbit" class="form-control form-control-md" name="input-category-ambit"></select>
  </div>
  <input class="btn btn-light float-left" type="reset" value="Limpiar">
  <button type="submit" class="btn btn-primary float-right">Guardar</button>
  </div>
  <br>

</form>
<?php echo '<script'; ?>
>
  window.onload = function () {
    searchAmbitJSON();
  }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body-content"} */
}
