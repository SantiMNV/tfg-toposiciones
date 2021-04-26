<?php
/* Smarty version 3.1.39, created on 2021-04-19 10:08:08
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\soluciones.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d3a689cb313_88802637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99482125f3023e5251f93b175645cb9cd5a54c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\soluciones.html',
      1 => 1618817238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d3a689cb313_88802637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1800200046607d3a689bbd39_20357814', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1800200046607d3a689bbd39_20357814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1800200046607d3a689bbd39_20357814',
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
