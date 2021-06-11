<?php
/* Smarty version 3.1.39, created on 2021-06-10 17:29:21
  from '/srv/http/toposiciones/view/smarty/main/templates/opposition_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c24bf1301e51_58780508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f42b986985c0675ac4a1266671e6337f21aeab' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/opposition_add.html',
      1 => 1623346091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c24bf1301e51_58780508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127476941960c24bf12fde19_96083136', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_127476941960c24bf12fde19_96083136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_127476941960c24bf12fde19_96083136',
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
<form action="/toposiciones/crear/" method="POST">
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
    <input class="btn btn-light float-left" type="reset" value="Limpiar">
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
