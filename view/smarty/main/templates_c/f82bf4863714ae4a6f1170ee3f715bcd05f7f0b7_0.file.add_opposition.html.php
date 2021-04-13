<?php
/* Smarty version 3.1.39, created on 2021-04-11 12:33:43
  from '/srv/http/toposiciones/view/smarty/main/templates/add_opposition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6072eca7649794_32923326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f82bf4863714ae4a6f1170ee3f715bcd05f7f0b7' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/add_opposition.html',
      1 => 1618143804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6072eca7649794_32923326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4600566436072eca7647bd4_70726874', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_4600566436072eca7647bd4_70726874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_4600566436072eca7647bd4_70726874',
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
    <input type="text" class="form-control" id="input-opposition-link" name="input-opposition-link">
  </div>
  <div class="form-group">
    <label for="input-opposition-state">Provincia</label>
    <input type="text" class="form-control" id="input-opposition-state" name="input-opposition-state">
  </div>
  <div class="form-group col-md-6 col-6 halfInput" style="padding-right: 20px;">
    <label for="input-opposition-seats">Plazas</label>
    <input type="number" class="form-control" id="input-opposition-seats" name="input-opposition-seats">
  </div>
  <!--<span class="col-2 col-md-2 float-left"></span> -->
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
    <input type="date" class="form-control" id="input-opposition-start" name="input-opposition-start">
  </div>

  <div class="form-group col-md-6 col-6 halfInput ">
    <label for="input-opposition-end halfInput">Fecha Fin</label>
    <input type="date" class="form-control" id="input-opposition-end" name="input-opposition-end">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<?php echo '<script'; ?>
>
  window.onload = function () {
    searchCategoryJSON("");
  }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body-content"} */
}
