<?php
/* Smarty version 3.1.39, created on 2021-06-09 17:15:06
  from '/srv/http/toposiciones/view/smarty/main/templates/theme.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c0f71a3dad93_14017268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a8303663fad36032f2a78c50fb6e2afc42f26b' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/theme.html',
      1 => 1623176515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c0f71a3dad93_14017268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111462501860c0f71a3ccd09_65148486', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_111462501860c0f71a3ccd09_65148486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_111462501860c0f71a3ccd09_65148486',
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
  <div class="tema row col-md-12">
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
