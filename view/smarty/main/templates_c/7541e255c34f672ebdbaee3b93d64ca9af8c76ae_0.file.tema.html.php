<?php
/* Smarty version 3.1.39, created on 2021-04-10 15:58:04
  from '/srv/http/toposiciones/view/smarty/main/templates/tema.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6071cb0c2d0f46_20851637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7541e255c34f672ebdbaee3b93d64ca9af8c76ae' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/tema.html',
      1 => 1618070270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6071cb0c2d0f46_20851637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10171083436071cb0c2c42a9_47464466', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_10171083436071cb0c2c42a9_47464466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_10171083436071cb0c2c42a9_47464466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
:</h2>
</div>
<section id="temas" class="col-md-12">
  <!-- TEMA-->
  <div id="tema1" class="tema row col-md-12">
    <div class="texto-tema">
      <h3><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
</h3>
      <div>
        <p><?php echo $_smarty_tpl->tpl_vars['theme']->value['category_name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['theme']->value['user_name'];?>
</p>
      </div>
      <div><?php echo $_smarty_tpl->tpl_vars['theme']->value['content'];?>
</div>
    </div>
    <hr />
  </div>
</section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "body-content"} */
}
