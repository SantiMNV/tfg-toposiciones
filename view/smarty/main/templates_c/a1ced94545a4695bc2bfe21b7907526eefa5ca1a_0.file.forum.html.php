<?php
/* Smarty version 3.1.39, created on 2021-04-18 10:28:09
  from '/srv/http/toposiciones/view/smarty/main/templates/forum.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c09b9e10d24_44093536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1ced94545a4695bc2bfe21b7907526eefa5ca1a' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/forum.html',
      1 => 1618741558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c09b9e10d24_44093536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883608818607c09b9dfba87_21790495', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1883608818607c09b9dfba87_21790495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1883608818607c09b9dfba87_21790495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_SESSION['login_user']))) {?>
<div id="add-content" class="text-center">
  <a href="/toposiciones/crear-post/">
    <i class="fas fa-plus-circle"></i>
    <div>Crear post</div>
  </a>
</div>
<?php if (($_SESSION['login_access_level'] > 5)) {?>
<br>
<!--
<div id="add-content" class="text-center">
  <a href="/toposiciones/lista-posts/">
    <i class="fas fa-list"></i>
    <div>Listar posts</div>
  </a>
</div>
-->
<?php }
}?>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<div class="col-md-12 col-12 col-sm-12" style="overflow-x: scroll;">
  <table class="table list-table table-striped table-hover table-sm ">
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
      <tr onclick="window.location='/toposiciones/foro/<?php echo $_smarty_tpl->tpl_vars['post']->value['postId'];?>
';">
        <th scope="row">
          <div class="post-title"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
<div class="float-right secondary"><?php echo $_smarty_tpl->tpl_vars['post']->value['user_name'];?>
</div>
          </div>
          <div class="post-content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</div>
        </th>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['post']->value['message_count'];?>
</td>
        <td style="min-width: 100px;"><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
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
