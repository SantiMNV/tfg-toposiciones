<?php
/* Smarty version 3.1.39, created on 2021-04-19 12:19:01
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\opposition_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d5915234057_24179925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9218d884e20d3f8db6a2eb33850ee3b954070c48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\opposition_list.html',
      1 => 1618817238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d5915234057_24179925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1160778627607d591521a293_96631814', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1160778627607d591521a293_96631814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1160778627607d591521a293_96631814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>

<!-- SECCION TEMAS -->
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll;">
  <table class="table list-table table-striped table-hover table-sm table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Id</th>
        <th scope="col">Estado</th>
        <th scope="col">Plazas</th>
        <th scope="col">Link</th>
        <th scope="col">Provincia</th>
        <th scope="col">Categoría</th>
        <th scope="col">Inicio</th>
        <th scope="col">Fin</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_oppositions']->value, 'opposition');
$_smarty_tpl->tpl_vars['opposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opposition']->value) {
$_smarty_tpl->tpl_vars['opposition']->do_else = false;
?>
      <tr onclick="window.location='/toposiciones/convocatorias/convocatoria/<?php echo $_smarty_tpl->tpl_vars['opposition']->value['oppositionId'];?>
'">
        <th>
          <form action="/toposiciones/lista-convocatoria/" method="POST">
            <input type="hidden" name="remove-request" value="remove">
            <input type="hidden" name="remove-theme" value="<?php echo $_smarty_tpl->tpl_vars['opposition']->value['oppositionId'];?>
">
            <button type="submit">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </th>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['opposition']->value['oppositionId'];?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_status'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];?>
</td>
        <td class="cut"><?php echo $_smarty_tpl->tpl_vars['opposition']->value['official_link'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['state'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['category_name'];?>
</td>
        <td style="min-width: 100px;"><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_start_date'];?>
</td>
        <td style="min-width: 100px;"><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_end_date'];?>
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
