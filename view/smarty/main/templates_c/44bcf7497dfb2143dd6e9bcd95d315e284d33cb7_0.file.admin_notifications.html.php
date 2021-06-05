<?php
/* Smarty version 3.1.39, created on 2021-06-05 17:32:28
  from '/srv/http/toposiciones/view/smarty/main/templates/admin_notifications.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bbb52c1715a5_24754126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44bcf7497dfb2143dd6e9bcd95d315e284d33cb7' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/admin_notifications.html',
      1 => 1622914345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bbb52c1715a5_24754126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130673827660bbb52c1666e4_80418948', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_130673827660bbb52c1666e4_80418948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_130673827660bbb52c1666e4_80418948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/http/toposiciones/view/smarty_lib/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<div class="full-action-button text-center">
  <a data-toggle="collapse" data-target="#searchDiv">
    <i class="fas fa-plus-circle"></i>
    <div>Añadir notificación</div>
  </a>
</div>
<div id="searchDiv" class="col-md-12 collapse">
  <form action="/toposiciones/admin/notificaciones/" method="POST">
    <input type="hidden" name="add-request" value="add">
    <div class="form-group">
      <label for="input-notification-text">Texto</label>
      <input type="text" class="form-control" id="input-notification-text" name="input-notification-text" required>
    </div>
    <div class="form-group">
      <label for="input-notification-type">Tipo</label>
      <select id="input-notification-type" name="input-notification-type" class="form-control" required>
        <option value="alert-primary">Principal</option>
        <option value="alert-secondary">Secundaria</option>
        <option value="alert-success">Éxito</option>
        <option value="alert-danger">Peligro</option>
        <option value="alert-warning">Advertencia</option>
        <option value="alert-info">Información</option>
        <option value="alert-light">Luminosa</option>
        <option value="alert-dark">Oscura</option>
      </select>
    </div>
    <div>
      <input class="btn btn-light float-left" type="reset" value="Limpiar">
      <button type="submit" class="btn btn-primary float-right">Guardar</button>
    </div>
    <br>
    <br>
    <br>
  </form>
</div>
<br>


<!-- SECCION TEMAS -->
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll;">
  <table class="table list-table table-striped table-hover table-sm table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Texto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Creación</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
      <tr>
        <th>
          <form action="/toposiciones/admin/notificaciones/" method="POST">
            <input type="hidden" name="remove-request" value="remove">
            <input type="hidden" name="remove-notification" value="<?php echo $_smarty_tpl->tpl_vars['notification']->value['notificationId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </th>
        <td scope="row"><?php echo $_smarty_tpl->tpl_vars['notification']->value['notificationText'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['notification']->value['notificationType'];?>
</td>
        <td class="cut"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['notification']->value['created_at'],"%e/%m/%G");?>
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
