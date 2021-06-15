<?php
/* Smarty version 3.1.39, created on 2021-06-12 18:06:38
  from '/srv/http/toposiciones/view/smarty/main/templates/themes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c4f7ae946550_06066070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8583f0084158ee6ace4911a5d3d259f4c92a3f4' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/themes.html',
      1 => 1623519948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4f7ae946550_06066070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189194177460c4f7ae92eb65_41934926', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_189194177460c4f7ae92eb65_41934926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_189194177460c4f7ae92eb65_41934926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="full-action-button text-center">
  <a data-toggle="collapse" data-target="#searchDiv">
    <i class="fas fa-filter"></i>
    <div>Filtrar Temas</div>
  </a>
</div>
<div id="searchDiv" class="col-md-12 text-center collapse">
  <form action="/toposiciones/temas/" method="POST">
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
  <a href="/toposiciones/temas/crear/">
    <i class="fas fa-plus-circle"></i>
    <div>Añadir Tema</div>
  </a>
</div>
<?php if (($_SESSION['login_access_level'] >= 8)) {?>
<div class="full-action-button text-center">
  <a href="/toposiciones/temas/lista/">
    <i class="fas fa-list"></i>
    <div>Listar Temas</div>
  </a>
</div>
<?php }?> <?php }?>
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
    <div class="texto-tema col-md-12">
      <a href="/toposiciones/temas/tema/<?php echo $_smarty_tpl->tpl_vars['theme']->value['themeId'];?>
">
        <h3><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
</h3>
      </a>
      <p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['theme']->value['content']);?>
</p>
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
