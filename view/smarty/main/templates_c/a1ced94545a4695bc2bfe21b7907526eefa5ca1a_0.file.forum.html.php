<?php
/* Smarty version 3.1.39, created on 2021-06-12 18:11:12
  from '/srv/http/toposiciones/view/smarty/main/templates/forum.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c4f8c0e4a114_93265007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1ced94545a4695bc2bfe21b7907526eefa5ca1a' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/forum.html',
      1 => 1623521469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4f8c0e4a114_93265007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144285663760c4f8c0e310c8_68963963', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_144285663760c4f8c0e310c8_68963963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_144285663760c4f8c0e310c8_68963963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="full-action-button text-center">
  <a data-toggle="collapse" data-target="#searchDiv">
    <i class="fas fa-filter"></i>
    <div>Filtrar Posts</div>
  </a>
</div>
<div id="searchDiv" class="col-md-12 text-center collapse">
  <form action="/toposiciones/foro/" method="POST">
    <div class="row justify-content-center">
      <div class="input-group">
        <input type="hidden" name="search-request" value="search">
        <input type="text" class="form-control" placeholder="Buscar" name="txtSearch" id="txtSearch" />
        <div class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="fas fa-search"></span>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
<?php if ((isset($_SESSION['login_user']))) {?>
<div class="full-action-button text-center">
  <a href="/toposiciones/foro/crear-post/">
    <i class="fas fa-plus-circle"></i>
    <div>Crear post</div>
  </a>
</div>
<?php }?>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll">
  <table class="table list-table table-striped table-hover table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Tema</th>
        <th scope="col">Respuestas</th>
        <th scope="col">Actividad</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
      <tr onclick="window.location='/toposiciones/foro/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['postId'];?>
';">
        <th scope="row">
          <div class="post-title">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>

            <div class="float-right secondary"><?php echo $_smarty_tpl->tpl_vars['post']->value['user_name'];?>
</div>
          </div>
          <div class="post-content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</div>
        </th>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['post']->value['message_count'];?>
</td>
        <td style="min-width: 100px"><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
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
