<?php
/* Smarty version 3.1.39, created on 2021-04-29 17:34:33
  from '/srv/http/toposiciones/view/smarty/main/templates/404.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608aee291b18c8_80608398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b8fb6ae60543df1f37f4f33f0c72385279db6c' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/404.html',
      1 => 1619717671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608aee291b18c8_80608398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317115550608aee291acc90_55748941', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1317115550608aee291acc90_55748941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1317115550608aee291acc90_55748941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<div>
  No se ha podido encontrar la página que buscabas, si crees que se trata de un error, contacta con
  soporte@toposiciones.com
</div>
<?php
}
}
/* {/block "body-content"} */
}
