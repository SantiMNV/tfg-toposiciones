<?php
/* Smarty version 3.1.39, created on 2021-04-19 12:44:07
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\add_opposition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d5ef73549d6_40079740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b8e9d96e36c3feb073a173bd76a3f0eac19e6b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\add_opposition.html',
      1 => 1618817238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d5ef73549d6_40079740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718777965607d5ef734fc97_89449560', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1718777965607d5ef734fc97_89449560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1718777965607d5ef734fc97_89449560',
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
<form action="/toposiciones/crear-convocatoria/" method="POST">
  <div class="form-group">
    <label for="input-opposition-link">Link oficial</label>
    <input type="text" class="form-control" id="input-opposition-link" name="input-opposition-link" required>
  </div>
  <div class="form-group">
    <label for="input-opposition-state">Provincia</label>
    <select id="inputSearchState" class="form-control form-control-md" name="input-opposition-state"></select>
  </div>
  <div class="form-group col-md-6 col-6 halfInput" style="padding-right: 20px;">
    <label for="input-opposition-seats">Plazas</label>
    <input type="number" class="form-control" id="input-opposition-seats" name="input-opposition-seats" value="1"
      min="1">
  </div>
  <div class="form-group col-md-6 col-6 halfInput">
    <label for="input-opposition-status">Estado</label>
    <select class="form-control form-control-md" name="input-opposition-status">
      <option value="Abierta">Abierta</option>
      <option value="Cerrada">Cerrada</option>
    </select>
  </div>
  <div class="form-group">
    <label for="input-opposition-category">Categoría</label><br>
    <select id="inputSearchCategory" class="form-control form-control-md" name="input-opposition-category"></select>
  </div>
  <div class="form-group col-md-6 col-6 halfInput" style="padding-right: 20px;">
    <label for="input-opposition-start">Fecha Inicio</label>
    <input type="date" class="form-control" id="input-opposition-start" name="input-opposition-start" required>
  </div>
  <div class="form-group col-md-6 col-6 halfInput ">
    <label for="input-opposition-end halfInput">Fecha Fin</label>
    <input type="date" class="form-control" id="input-opposition-end" name="input-opposition-end">
  </div>
  <div>
    <input class="btn btn-secondary float-left" type="reset" value="Limpiar">
    <button type="submit" class="btn btn-primary float-right">Guardar</button>
  </div>
  <br>

</form>
<?php echo '<script'; ?>
>
  window.onload = function () {
    searchCategoryJSON();
    searchStateJSON();
  }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body-content"} */
}
