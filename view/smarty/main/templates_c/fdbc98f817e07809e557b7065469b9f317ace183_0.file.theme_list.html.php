<?php
/* Smarty version 3.1.39, created on 2021-04-11 11:08:46
  from '/srv/http/toposiciones/view/smarty/main/templates/theme_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6072d8bed93462_59080833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdbc98f817e07809e557b7065469b9f317ace183' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/theme_list.html',
      1 => 1618139119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6072d8bed93462_59080833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12712342156072d8bed8c8f3_45030535', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_12712342156072d8bed8c8f3_45030535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_12712342156072d8bed8c8f3_45030535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
  <p>Información de los últimos temas</p>
</div>

<!-- SECCION TEMAS -->
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll;">
  <table class="table list-table table-striped table-hover table-sm table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Id</th>
        <th scope="col">Nombre tema</th>
        <th scope="col">Categoría</th>
        <th scope="col">Contenido</th>
        <th scope="col">Usuario</th>
        <th scope="col">Fecha Creación</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
      <tr onclick="window.location='/toposiciones/temas/tema/<?php echo $_smarty_tpl->tpl_vars['theme']->value['themeId'];?>
';">
        <th>
          <form action="/toposiciones/lista-tema/" method="POST">
            <input type="hidden" name="remove-request" value="remove">
            <input type="hidden" name="remove-theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value['themeId'];?>
">
            <button type="submit">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>

          </form>
        </th>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['theme']->value['themeId'];?>
</th>
        <td class="cut"><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['theme']->value['category_name'];?>
</td>
        <td class="cut"><?php echo $_smarty_tpl->tpl_vars['theme']->value['content'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['theme']->value['user_name'];?>
</td>
        <td style="min-width: 100px;"><?php echo $_smarty_tpl->tpl_vars['theme']->value['created_at'];?>
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
