<?php
/* Smarty version 3.1.39, created on 2021-06-05 10:17:25
  from '/srv/http/toposiciones/view/smarty/main/templates/opposition_ambit_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb4f35554390_28250515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a2ac274318724fef74d0969a6e8396f29049ca7' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/opposition_ambit_add.html',
      1 => 1622888239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb4f35554390_28250515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105487754360bb4f3554f514_34151292', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_105487754360bb4f3554f514_34151292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_105487754360bb4f3554f514_34151292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<form action="/toposiciones/convocatorias/ambitos/" method="POST">
  <input type="hidden" name="add-request" value="add">
  <div class="form-group">
    <label for="input-ambit-name">Nombre del Ámbito</label>
    <input type="text" class="form-control" id="input-ambit-name" name="input-ambit-name" required>
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
