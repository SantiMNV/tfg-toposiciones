<?php
/* Smarty version 3.1.39, created on 2021-06-14 18:20:52
  from '/srv/http/toposiciones/view/smarty/main/templates/opposition_category_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c79e04b9d6b1_39570978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d0fd9e112b6dcc023747af0a3a8a49d99eeff2' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/opposition_category_list.html',
      1 => 1623519751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c79e04b9d6b1_39570978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193410134460c79e04b83f20_73997406', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_193410134460c79e04b83f20_73997406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_193410134460c79e04b83f20_73997406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/http/toposiciones/view/smarty_lib/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<?php if ((isset($_SESSION['login_user']))) {
if (($_SESSION['login_access_level'] >= 8)) {?>
<div class="full-action-button text-center">
  <a href="/toposiciones/convocatorias/categorias/crear/">
    <i class="fas fa-plus-circle"></i>
    <div>Añadir Categoría</div>
  </a>
</div>
<?php }
}?>

<!-- SECCION TEMAS -->
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll;">
  <table class="table list-table table-striped table-hover table-sm table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Nombre</th>
        <th scope="col">Material</th>
        <th scope="col">Convocatorias</th>
        <th scope="col">Ámbito</th>
        <th scope="col">Creación</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
      <tr onclick="window.location='/toposiciones/convocatorias/categorias/<?php echo $_smarty_tpl->tpl_vars['category']->value['categoryId'];?>
'">
        <th>
          <form action="/toposiciones/convocatorias/categorias/" method="POST">
            <input type="hidden" name="remove-request" value="remove">
            <input type="hidden" name="remove-category" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['categoryId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </th>
        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</td>
        <td class="cut"><?php echo $_smarty_tpl->tpl_vars['category']->value['material'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['opposition_count'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['ambit_name'];?>
</td>
        <td class="cut"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['category']->value['created_at'],"%e/%m/%G");?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>

<?php
}
}
/* {/block "body-content"} */
}
