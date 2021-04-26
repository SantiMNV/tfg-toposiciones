<?php
/* Smarty version 3.1.39, created on 2021-04-11 15:28:10
  from '/srv/http/toposiciones/view/smarty/main/templates/temas.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6073158ac17558_22337621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6583ad94058a83053312b38b7d05806b9ce09fcc' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/temas.html',
      1 => 1618141223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6073158ac17558_22337621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3187345096073158abff9f7_25964895', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_3187345096073158abff9f7_25964895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_3187345096073158abff9f7_25964895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_SESSION['login_user']))) {?>
<div id="add-content" class="text-center">
  <a href="/toposiciones/crear-tema/">
    <i class="fas fa-plus-circle"></i>
    <div>Añadir Tema</div>
  </a>
</div>
<?php if (($_SESSION['login_access_level'] > 5)) {?>
<br>
<div id="add-content" class="text-center">
  <a href="/toposiciones/lista-tema/">
    <i class="fas fa-list"></i>
    <div>Listar Temas</div>
  </a>
</div>
<?php }
}?>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
  <p>Información de los últimos temas</p>
</div>

<!-- SECCION TEMAS -->

<section id="temas" class="col-md-12">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
  <!-- TEMA-->
  <div id="tema1" class="tema row col-md-12">
    <div class="texto-tema col-md-10">
      <a href="/toposiciones/temas/tema/<?php echo $_smarty_tpl->tpl_vars['theme']->value['themeId'];?>
">
        <h3><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
</h3>
      </a>
      <p><?php echo $_smarty_tpl->tpl_vars['theme']->value['content'];?>
</p>
    </div>
    <div class="col-md-2">
      <form action="/toposiciones/temas/tema/<?php echo $_smarty_tpl->tpl_vars['theme']->value['themeId'];?>
">
        <button type="submit" class="btn btn-info">Acceder</button>
      </form>
    </div>
    <hr />
  </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>

<?php
}
}
/* {/block "body-content"} */
}
