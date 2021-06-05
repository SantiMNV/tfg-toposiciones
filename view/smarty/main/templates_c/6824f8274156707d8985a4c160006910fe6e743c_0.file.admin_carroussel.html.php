<?php
/* Smarty version 3.1.39, created on 2021-06-04 15:49:51
  from '/srv/http/toposiciones/view/smarty/main/templates/admin_carroussel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ba4b9f2745e3_08546208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6824f8274156707d8985a4c160006910fe6e743c' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/admin_carroussel.html',
      1 => 1622820918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba4b9f2745e3_08546208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66019573660ba4b9f25c524_51969789', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_66019573660ba4b9f25c524_51969789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_66019573660ba4b9f25c524_51969789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<?php if ((isset($_SESSION['login_user'])) && $_SESSION['login_access_level'] >= 10) {?>
<div class="full-action-button text-center">
  <a href="/toposiciones/admin/carroussel/crear/">
    <i class="fas fa-plus-circle"></i>
    <div>Añadir Slide</div>
  </a>
</div>
<?php }?>
<!-- SECCION TEMAS -->
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll;">
  <table class="table list-table table-striped table-hover table-sm table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Imagen</th>
        <th scope="col">Título</th>
        <th scope="col">Subtítulo</th>
        <th scope="col">orden</th>
        <th scope="col">Creado el</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carroussel']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
      <tr onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['slide']->value['imageLink'];?>
'">
        <th>
          <form action="/toposiciones/admin/carroussel/" method="POST">
            <input type="hidden" name="remove-request" value="remove">
            <input type="hidden" name="remove-slide" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['slideId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
          <form action="/toposiciones/admin/carroussel/" method="POST">
            <input type="hidden" name="move-request" value="up">
            <input type="hidden" name="move-slide" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['slideId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fas fa-arrow-up"></i>
            </button>
          </form>
          <form action="/toposiciones/admin/carroussel/" method="POST">
            <input type="hidden" name="move-request" value="down">
            <input type="hidden" name="move-slide" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['slideId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fas fa-arrow-down"></i>
            </button>
          </form>
        </th>
        <!-- <th scope="row"><?php echo $_smarty_tpl->tpl_vars['slide']->value['imagePath'];?>
</th> -->
        <th scope="row"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slide']->value['imagePath'];?>
" class="img-thumbnail" style="max-width: 200px;"
            alt=""></th>
        <td><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</td>
        <td class="cut"><?php echo $_smarty_tpl->tpl_vars['slide']->value['subtitle'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['slide']->value['slideOrder'];?>
</td>
        <td class="cut"><?php echo $_smarty_tpl->tpl_vars['slide']->value['created_at'];?>
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
