<?php
/* Smarty version 3.1.39, created on 2021-04-03 08:42:09
  from '/srv/http/toposiciones/view/smarty/main/templates/soluciones.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60682a617313b2_87012510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fd87b9f3fd1c0b223cfb1e9f0f6edf1d0c3b98' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/soluciones.html',
      1 => 1617439287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60682a617313b2_87012510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69159734260682a61723828_30381846', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_69159734260682a61723828_30381846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_69159734260682a61723828_30381846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
  <p>Información de los últimos temas</p>
</div>
<div id="y"></div>
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
