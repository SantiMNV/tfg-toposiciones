<?php
/* Smarty version 3.1.39, created on 2021-05-16 17:18:06
  from '/srv/http/toposiciones/view/smarty/main/templates/oppositions.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a153cec614a8_71708118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d0f1206d51b7892c417555bd4000774f3141f9' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/oppositions.html',
      1 => 1621184718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a153cec614a8_71708118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37770573160a153cec3c6f9_27539800', "body-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_37770573160a153cec3c6f9_27539800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_37770573160a153cec3c6f9_27539800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/http/toposiciones/view/smarty_lib/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="full-action-button text-center">
  <a id="searchBtn" class="">
    <i class="fas fa-filter"></i>
    <div>Filtrar Convocatorias</div>
  </a>
</div>
<div id="search-container" class="col-md-12"></div>
<?php if ((isset($_SESSION['login_user']))) {?>
<div class="full-action-button text-center">
  <a href="/toposiciones/crear-convocatoria/">
    <i class="fas fa-plus-circle"></i>
    <div>Añadir Convocatoria</div>
  </a>
</div>
<?php if (($_SESSION['login_access_level'] > 5)) {?>
<div class="full-action-button text-center">
  <a href="/toposiciones/lista-convocatoria/">
    <i class="fas fa-list"></i>
    <div>Listar Convocatorias</div>
  </a>
</div>
<?php }?> <?php }?>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
  <p>Información de las últimas oposiciones</p>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_oppositions']->value, 'opposition');
$_smarty_tpl->tpl_vars['opposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opposition']->value) {
$_smarty_tpl->tpl_vars['opposition']->do_else = false;
?>
<section id="" class="col-md-12">
  <div id="opposition1" class="opposition row col-md-12">
    <div class="opposition_image_container col-md-3 col-sm-3 text-center">
      <img
        class="rounded-circle"
        src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-<?php echo mb_strtolower(urlify($_smarty_tpl->tpl_vars['opposition']->value['state']), 'UTF-8');?>
.png"
      />
    </div>

    <div class="texto-tema col-md-9 col-sm-9">
      <div class="">
        <a
          class="card-link"
          href="/toposiciones/convocatorias/convocatoria/<?php echo $_smarty_tpl->tpl_vars['opposition']->value['oppositionId'];?>
"
        >
          <h3>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 1) {?> <?php echo ($_smarty_tpl->tpl_vars['opposition']->value['opposition_status']).("s");?>

            <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_status'];?>
 <?php }?> [<?php echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];?>
]
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > 1) {?> plazas <?php } else { ?> plaza <?php }?> de
            <?php echo $_smarty_tpl->tpl_vars['opposition']->value['category_name'];?>
 en <?php echo $_smarty_tpl->tpl_vars['opposition']->value['state'];?>

          </h3>
        </a>
      </div>
      <div class="date">
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['opposition']->value['updated_at'],"%e/%m/%G");?>

      </div>
    </div>
    <hr />
  </div>
</section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '<script'; ?>
>
  window.onload = function () {
    document.getElementById("searchBtn").addEventListener("click", showSearch);
  };
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body-content"} */
}
