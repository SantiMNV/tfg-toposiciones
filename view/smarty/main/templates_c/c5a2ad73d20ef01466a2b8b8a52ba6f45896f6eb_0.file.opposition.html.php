<?php
/* Smarty version 3.1.39, created on 2021-05-16 18:28:37
  from '/srv/http/toposiciones/view/smarty/main/templates/opposition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a164552b8f27_39868784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a2ad73d20ef01466a2b8b8a52ba6f45896f6eb' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/opposition.html',
      1 => 1621184711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a164552b8f27_39868784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61129373260a16455291078_51768629', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_61129373260a16455291078_51768629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_61129373260a16455291078_51768629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/http/toposiciones/view/smarty_lib/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_oppositions']->value, 'opposition');
$_smarty_tpl->tpl_vars['opposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opposition']->value) {
$_smarty_tpl->tpl_vars['opposition']->do_else = false;
?>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['opposition']->value['opposition_status'], 'UTF-8');?>
</h2>
  <p><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_description'];?>
</p>
</div>
<section id="" class="col-md-12">
  <div id="opposition1" class="opposition row col-md-12">
    <div class="opposition_image_container col-md-3 col-sm-3 text-center">
      <img class="rounded-circle "
        src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-<?php echo mb_strtolower(urlify($_smarty_tpl->tpl_vars['opposition']->value['state']), 'UTF-8');?>
.png">
    </div>

    <div class="texto-tema col-md-9 col-sm-9">
      <div class="">
        <a class="card-link" href="/toposiciones/convocatorias/convocatoria/<?php echo $_smarty_tpl->tpl_vars['opposition']->value['oppositionId'];?>
">
          <h3>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 1) {?>
            <?php echo ($_smarty_tpl->tpl_vars['opposition']->value['opposition_status']).("s");?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_status'];?>

            <?php }?>
            [<?php echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];?>
]
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > 1) {?>
            plazas
            <?php } else { ?>
            plaza
            <?php }?>
            de <?php echo $_smarty_tpl->tpl_vars['opposition']->value['category_name'];?>
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
<table class="col-md-12 opposition-info">
  <tr>
    <td>Link oficial</td>
    <td><a href="<?php echo $_smarty_tpl->tpl_vars['opposition']->value['official_link'];?>
">Acceder</a></td>
  </tr>
  <tr>
    <td>Provincia</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['state'];?>
</td>
  </tr>
  <tr>
    <td>Plazas</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['seats'];?>
</td>
  </tr>
  <tr>
    <td>Estado</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_status'];?>
</td>
  </tr>
  <tr>
    <td>Categoría</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['category_name'];?>
</td>
  </tr>
  <tr>
    <td>Fecha inicio</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_start_date'];?>
</td>
  </tr>
  <tr>
    <td>Fecha Fin</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['opposition_end_date'];?>
</td>
  </tr>
  <tr>
    <td>Ámbito</td>
    <td><?php echo $_smarty_tpl->tpl_vars['opposition']->value['ambit_name'];?>
</td>
  </tr>
  <tr>
    <td>Material recomendado</td>
    <td><a href="<?php echo $_smarty_tpl->tpl_vars['opposition']->value['recommended_material'];?>
">Acceder</a></td>
  </tr>
</table>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "body-content"} */
}
