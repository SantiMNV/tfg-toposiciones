<?php
/* Smarty version 3.1.39, created on 2021-04-25 19:29:14
  from '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6085c30a14d417_35630443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7978d4188dc44190d274ca1fec23bba738b831' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html',
      1 => 1619378951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6085c30a14d417_35630443 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- <i class="fas fa-bars"></i> -->
      </button>
    </div>
    <!-- Menu -->
    <div class="collapse col-md-9 navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav col-md-8 col-sm-6 col-6" id="main-menu">
        <li class="nav-item">
          <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Convocatorias') {?>active-link<?php }?>"
            href="/toposiciones/convocatorias/">
            <!-- <i class="fas fa-calendar"></i> -->
            Convocatorias
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Temas') {?>active-link<?php }?> " href="/toposiciones/temas/">
            <!-- <i class="fas fa-book"></i> -->
            Temas
          </a>
        </li>
        <!--<li class="nav-item"><a class="nav-link" href="">Tests</a></li>
        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Soluciones') {?>active-link<?php }?>"
            href="/toposiciones/soluciones/">Soluciones</a></li>-->
        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Foro') {?>active-link<?php }?>"
            href="/toposiciones/foro/">
            <!-- <i class="fas fa-comments"></i> -->
            Foro
          </a></li>
        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Contacto') {?>active-link<?php }?>"
            href="/toposiciones/contacto/">
            <!--<i class="fas fa-id-card"></i> -->
            Contacto
          </a></li>

        <?php if ((isset($_SESSION['login_user']))) {?>
        <?php if (($_SESSION['login_access_level'] > 5)) {?>
        <li class="nav-item" id="adminSite">
          <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Admin') {?>active-link<?php }?>" href="/toposiciones/admin/">
            <i class="fas fa-tools"></i>
            Admin
          </a>
        </li>
        <?php }?>
        <?php }?>
      </ul>
      <ul class="navbar-nav col-md-2 col-sm-6 col-6 ml-auto" id="right-menu">
        <li class="nav-item">
          <?php if ((isset($_SESSION['login_user']))) {?>
          <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Perfil') {?>active-link<?php }?>" href="/toposiciones/profile/">
            <i class="fas fa-user"></i>
            Cuenta
          </a>
          <?php } else { ?>
          <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value->getCurrentPage() == 'Login') {?>active-link<?php }?>" href="/toposiciones/login/">
            <i class="fas fa-user"></i>
            Entrar
          </a>
          <?php }?>
        </li>
        <!--
        <li class="nav-item" id="searchBtn2">
          <a class="nav-link ">
            <i class="fas fa-search"></i>
            Buscar
          </a>
        </li>
        -->


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
              <div class="secondary">
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
      <div id="search-container2" class="col-md-12"></div>
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





      <div class="modal fade" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="notice d-flex justify-content-between align-items-center">
                <div class="cookie-text">Este sitio usa cookies para mejorar la experiencia </div>
                <div class="buttons d-flex flex-column flex-lg-row">
                  <a href="#a" class="btn btn-success btn-sm" data-dismiss="modal">Acepto</a>
                  <a href="/toposiciones/privacidad/" class="btn btn-secondary btn-sm" data-dismiss="modal">
                    Leer más.
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- 
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCookie1">
        Launch modal
      </button>
      
      <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row d-flex justify-content-center align-items-center">
                <p class="pt-3 pr-2">We use cookies to improve your website experience</p>
                <a type="button" class="btn btn-primary" href="/toposiciones/privacidad/">Learn more
                  <i class="fas fa-book ml-1"></i>
                </a>
                <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      -->

      <div class="body-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10373007976085c30a144740_55670033', "body-content");
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['side_messages']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
            <li class="list-group-item">
              <div class="question">
                <a class="card-link" href="/toposiciones/foro/<?php echo $_smarty_tpl->tpl_vars['m']->value['postId'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</a>

              </div>
              <div class="secondary">

                <?php echo $_smarty_tpl->tpl_vars['m']->value['user_name'];?>
 | <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['created_at'],"%e/%b/%G");?>

              </div>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!--
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
              <div class="secondary">
                23/3/21 8:41
              </div>
            </li>
            -->
          </ul>

        </div>
      </div>
    </div>
    <div id="snackbar"></div>
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
          Toposiciones todo los que necesitas para sacar tu plaza! <br />
        </p>
        <p>
          <a href="/toposiciones/privacidad/">Cookies & Política de privacidad</a>
        </p>
        <p>
          <a href="/toposiciones/contacto/">Contacta con nosotros</a>
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
class Block_10373007976085c30a144740_55670033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_10373007976085c30a144740_55670033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="/toposiciones/convocatorias/">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/calendar.jpg" alt="First slide">
                <div class="carousel-caption ">
                  <h5>Accede a las últimas convocatorias</h5>
                  <p>Podras encontrar las últimas convocatorias anunciafas y filtrarlas según tu criterio</p>
                </div>
              </a>
            </div>
            <div class="carousel-item ">
              <a href="/toposiciones/temas/">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/library.jpg" href="/toposiciones/temas/"
                  alt="First slide">
                <div class="carousel-caption ">
                  <h5>Temas de oposiciones</h5>
                  <p>Accede a la sección de temas para encontrar los últimos temas para las oposiciones</p>
                </div>
              </a>
            </div>
            <div class="carousel-item ">
              <a href="/toposiciones/foro/">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/forum.png" href="/toposiciones/foro/"
                  alt="First slide">
                <div class="carousel-caption">
                  <h5>Foro</h5>
                  <p>En el foro hallarás compañeros que plantean y resuelven dudas a diario</p>
                </div>
              </a>

            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <hr><br>
        <h2 class="text-center">Trucos para sacar plaza!</h2>
        <br>
        <div class="half-sq row">
          <div class="col-md-6 d-block w-100 float-left">
            <img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/trick_prepared.jpg" class="img-thumbnail" alt="">
          </div>
          <div class="col-md-6 d-block w-100 float-right">
            <blockquote class="quote-card blue-card">
              <p>
                Recuerda llevar todo el material necesario, incluyendo dos bolígrafos al menos
              </p>
            </blockquote>
          </div>
        </div>
        <div class="half-sq row">
          <div class="col-md-6 d-block w-100 float-right">
            <blockquote class="quote-card">
              <p>
                Se recomienda llevar una botella de agua, es común que un exámen dure 3 horas
              </p>
            </blockquote>
          </div>
          <div class="col-md-6 d-block w-100 float-left">
            <img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/trick_bottle.jpg" class="img-thumbnail" alt="">
          </div>
        </div>
        <div class="half-sq row">
          <div class="col-md-6 d-block w-100 float-left">
            <img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/trick_sad.jpg" class="img-thumbnail" alt="">
          </div>
          <div class="col-md-6 d-block w-100 float-right">
            <blockquote class="quote-card green-card">
              <p>
                No se ponga nervioso/a es sólo un exámen
              </p>
            </blockquote>
          </div>
        </div>
        <div class="half-sq row">
          <div class="col-md-6 d-block w-100 float-right">
            <blockquote class="quote-card red-card">
              <p>
                Lea las preguntas con detenimiento
              </p>
            </blockquote>
          </div>
          <div class="col-md-6 d-block w-100 float-left">
            <img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/trick_read.jpg" class="img-thumbnail" alt="">
          </div>
        </div>
        <!-- <div class="page-header">
        </div>
        -->
        <?php
}
}
/* {/block "body-content"} */
}
