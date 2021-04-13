<?php
/* Smarty version 3.1.39, created on 2021-04-10 10:23:39
  from '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60717cab4e1031_85730727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7978d4188dc44190d274ca1fec23bba738b831' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html',
      1 => 1618050218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60717cab4e1031_85730727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/http/toposiciones/view/smarty_lib/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- SantiMNV
  // Extra small screen / phone
  xs: 0,
  // Small screen / phone
  sm: 576px,
  // Medium screen / tablet
  md: 768px,
  // Large screen / desktop
  lg: 992px,
  // Extra large screen / wide desktop
  xl: 1200px
-->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_smarty_tpl->tpl_vars['page']->value->topTitle;?>
</title>
  <!-- fontawesome -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['CSS_DIRECTORY']->value;?>
/fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Versión compilada y minimizada del CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- CSS propio que usaremos para personalizar BS -->
  <link rel="stylesheet " href="<?php echo $_smarty_tpl->tpl_vars['CSS_DIRECTORY']->value;?>
/estilos.css" />
  <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/company/fototopo32no-fondo.png">
</head>

<body>



  <!-- Barra Menu -->
  <nav class="navbar navbar-expand-md sticky-top container-fluid" id="menu-bar">
    <!-- Brand/logo -->
    <div class=" col-md-3" id="menu-first-line">
      <a class="navbar-brand " href="/toposiciones/" id="brand-menu">
        <!-- <img src="../../../../media/images/fototopo64v2.png">-->
        <img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/company/fototopo64v2.png">
        <div>
          <h1>Toposiciones</h1>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <!-- Menu -->
    <div class="collapse col-md-9 navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav col-md-8 col-sm-6 col-6" id="main-menu">
        <li class="nav-item"><a class="nav-link" href="/toposiciones/convocatorias/">Convocatorias</a></li>
        <li class="nav-item"><a class="nav-link" href="/toposiciones/temas/">Temas</a></li>
        <!--<li class="nav-item"><a class="nav-link" href="">Tests</a></li>-->
        <li class="nav-item"><a class="nav-link" href="/toposiciones/soluciones/">Soluciones</a></li>
        <li class="nav-item"><a class="nav-link" href="/toposiciones/foros/">Foros</a></li>
      </ul>
      <ul class="navbar-nav col-md-2 col-sm-6 col-6 ml-auto" id="right-menu">
        <li class="nav-item">
          <?php if ((isset($_SESSION['login_user']))) {?>
          <a class="nav-link" href="/toposiciones/profile/">
            <i class="fas fa-user"></i>
            Cuenta
          </a>
          <?php } else { ?>
          <a class="nav-link" href="/toposiciones/login/">
            <i class="fas fa-user"></i>
            Entrar
          </a>
          <?php }?>
        </li>
        <li class="nav-item" id="searchBtn">
          <a class="nav-link">
            <i class="fas fa-search"></i>
            Buscar
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid row" id="wrapper">
    <!-- Left bar -->
    <div class="left-bar col-md-3 d-none d-lg-block order-1">
      <div class="sticky-top">
        <div class="card">
          <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/calendario-sin-fondo.png" alt="Calendario">
          <h5 class="card-title"><a href="/toposiciones/convocatorias/">Últimas oposiciones</a></h5>
          <ul class="list-group list-group-flush">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oppositions']->value, 'opposition');
$_smarty_tpl->tpl_vars['opposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opposition']->value) {
$_smarty_tpl->tpl_vars['opposition']->do_else = false;
?>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive"
                src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-<?php echo mb_strtolower(urlify($_smarty_tpl->tpl_vars['opposition']->value['state']), 'UTF-8');?>
.png">
              <div class="">
                <a class="card-link" href="/toposiciones/convocatorias/convocatoria/<?php echo $_smarty_tpl->tpl_vars['opposition']->value['oppositionId'];?>
">
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

                </a>
              </div>
              <div class="date">
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['opposition']->value['updated_at'],"%e/%b/%G %H:%M:%S");?>

              </div>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      </div>
    </div>
    <!-- Content -->
    <div class="col-md order-2" id="content">
      <nav aria-label="breadcrumb" class="sticky-top breadcrumb-nav d-none d-lg-block">
        <ol class="breadcrumb">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadCrumbs']->value, 'crumb', false, NULL, 'breadCrumb', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['crumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->value) {
$_smarty_tpl->tpl_vars['crumb']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['total'];
?>
          <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['first'] : null)) {?>
          <li class="breadcrumb-item"><a href="/<?php echo (mb_strtolower($_smarty_tpl->tpl_vars['crumb']->value, 'UTF-8')).('/');?>
">Inicio</a>
          </li>
          <?php } else { ?>
          <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadCrumb']->value['last'] : null)) {?>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['crumb']->value;?>

          </li>
          <?php } else { ?>
          <li class="breadcrumb-item"><a href="/toposiciones/<?php echo (mb_strtolower($_smarty_tpl->tpl_vars['crumb']->value, 'UTF-8')).('/');?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value;?>
</a></li>
          <?php }?>
          <?php }?>

          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
      </nav>
      <div id="search-container" class="col-md-12">

      </div>
      <div class="alerts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alerts']->value, 'alert_item', false, 'alert_key');
$_smarty_tpl->tpl_vars['alert_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert_key']->value => $_smarty_tpl->tpl_vars['alert_item']->value) {
$_smarty_tpl->tpl_vars['alert_item']->do_else = false;
?>
        <div class="alert <?php echo $_smarty_tpl->tpl_vars['alert_item']->value;?>
 alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_smarty_tpl->tpl_vars['alert_key']->value;?>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <div class="body-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20269720060717cab4dd8e7_49183241', "body-content");
?>

      </div>

    </div>
    <!-- Right bar -->
    <div class="right-bar col-md-2 d-none d-lg-block order-3 ">
      <div class="sticky-top">
        <div class="card">
          <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/foro.jpg" alt="Foro">
          <h5 class="card-title">Mensajes en foro</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/profile_pic.jpeg" alt="Messi">
              <div class="user-name">
                &nbsp;
                <a href="">Messi chikito</a>
              </div>
              <div class="question">
                Cuanto es el resultado de uno mas uno?
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/profile_pic.jpeg" alt="Messi">
              <div class="user-name">
                &nbsp;
                <a href="">Messi chikito</a>
              </div>
              <div class="question">
                Cuanto es el resultado de uno mas uno?
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/profile_pic.jpeg" alt="Messi">
              <div class="user-name">
                &nbsp;
                <a href="">Messi chikito</a>
              </div>
              <div class="question">
                Cuanto es el resultado de uno mas uno?
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <button id="backToTopBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <div class="p-4">
      <section class="mb-4">
        <!-- Google -->
        <a class="btn btn-outline-light m-2" href="mailto:santimnv27@gmail.com" role="button"><i
            class="fab fa-google"></i></a>
        <!-- Linkedin -->
        <a class="btn btn-outline-light m-2" href="www.linkedin.com/in/santimnv" role="button"><i
            class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn btn-outline-light m-2" href="https://github.com/santimnv" role="button"><i
            class="fab fa-github"></i></a>
      </section>
      <section class="mb-4">
        <p>
          Trabajo Final de Grado IES A.G.Linares (Cantabria) <br />
          Desarrollo de Aplicaciones Web
        </p>
        <p>
          <a href="">Cookies & Política de privacidad</a>
        </p>
      </section>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3"">
            &copy; 2021 Copyright: SantiMNV
            <a class=" text-white" href="https://toposiciones.es">Toposiciones.es</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['JS_DIRECTORY']->value;?>
/main.js"><?php echo '</script'; ?>
>

</html><?php }
/* {block "body-content"} */
class Block_20269720060717cab4dd8e7_49183241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_20269720060717cab4dd8e7_49183241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="page-header">
          <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et
            dolore magna aliqua. Ut enim ad</p>
        </div>
        <!-- SECCION TEMAS -->
        <section id="temas" class="col-md-12">
          <!-- TEMA-->
          <div id="tema1" class="tema row col-md-12">
            <div class="texto-tema col-md-10">
              <h3>Procedimiento administrativo local</h3>
              <p>Procedimiento administrativo local. El registro de entrada y salida de documentos. Requisitos
                de la presentación de
                documentos. Comunicaciones y notificaciones</p>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-info">Acceder</button>
            </div>
            <hr />
          </div>
          <div id="tema1" class="tema row col-md-12">
            <div class="texto-tema col-md-10">
              <h3>Procedimiento administrativo local</h3>
              <p>Procedimiento administrativo local. El registro de entrada y salida de documentos. Requisitos
                de la presentación de
                documentos. Comunicaciones y notificaciones</p>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-info">Acceder</button>
            </div>
            <hr />
          </div>
          <div id="tema1" class="tema row col-md-12">
            <div class="texto-tema col-md-10">
              <h3>Procedimiento administrativo local</h3>
              <p>Procedimiento administrativo local. El registro de entrada y salida de documentos. Requisitos
                de la presentación de
                documentos. Comunicaciones y notificaciones</p>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-info">Acceder</button>
            </div>
            <hr />
          </div>
        </section>

        <?php
}
}
/* {/block "body-content"} */
}
