<?php
/* Smarty version 3.1.39, created on 2021-03-25 17:29:07
  from '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605cc863a500b6_50618361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7978d4188dc44190d274ca1fec23bba738b831' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html',
      1 => 1616693331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605cc863a500b6_50618361 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_smarty_tpl->tpl_vars['page']->value->topTitle;?>
</title>
</head>

<body>
  Hola <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>

  <?php echo $_smarty_tpl->tpl_vars['page']->value->slug;?>

</body>

</html><?php }
}
