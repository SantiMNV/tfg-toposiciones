<?php
/* Smarty version 3.1.39, created on 2021-03-25 19:55:58
  from '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605ceacecbaf14_67322323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7978d4188dc44190d274ca1fec23bba738b831' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/layouts/main_layout.html',
      1 => 1616702157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605ceacecbaf14_67322323 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- SantiMNV
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
  <title>Photo Beans </title>
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
  <!--<link rel="icon" href="./images/fototopo32no-fondo.png"> -->
</head>

<body>

  <!-- Barra Menu -->
  <nav class="navbar navbar-expand-md sticky-top container-fluid" id="menu-bar">
    <!-- Brand/logo -->
    <div class=" col-md-3" id="menu-first-line">
      <a class="navbar-brand " href="#" id="brand-menu">
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
        <li class="nav-item"><a class="nav-link" href="">Convocatorias</a></li>
        <li class="nav-item"><a class="nav-link" href="">Temas</a></li>
        <!--<li class="nav-item"><a class="nav-link" href="">Tests</a></li>-->
        <li class="nav-item"><a class="nav-link" href="">Soluciones</a></li>
        <li class="nav-item"><a class="nav-link" href="">Foros</a></li>
      </ul>
      <ul class="navbar-nav col-md-2 col-sm-6 col-6 ml-auto" id="right-menu">
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-user"></i>
            Entrar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-search"></i>
            Buscar
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid row" id="wrapper">
    <div class="left-bar col-md-3 d-none d-lg-block order-1">
      <div class="sticky-top">
        <div class="card">
          <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/calendario-sin-fondo.png" alt="Calendario">
          <h5 class="card-title">Últimas oposiciones</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-asturias.png"
                alt="bandera-asturias">
              <div class="">
                <a class="card-link" href="">
                  Convocadas CINCUENTA Y OCHO [58] plazas Cuerpo Superior de
                  Inspectores de
                  Trabajo y Seguridad Social (Estado)
                </a>
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-asturias.png"
                alt="bandera-asturias">
              <div class="">

                <a class="card-link" href="">
                  Convocadas CINCUENTA Y OCHO [58] plazas Cuerpo Superior de
                  Inspectores de
                  Trabajo y Seguridad Social (Estado)
                </a>
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-cordoba.png"
                alt="bandera-cordoba">
              <div class="">
                <a class="card-link" href="">
                  Abierto Plazo Bolsa de Trabajo de Administrativo en el Ayuntamiento de Montoro
                  (Córdoba)
                </a>
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-asturias.png"
                alt="bandera-cordoba">
              <div class="">
                <a class="card-link" href="">
                  Convocada una [1] plazas Auxiliar de Inclusión Social en el Ayuntamiento de Adamuz
                  (Córdoba)
                </a>
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
            <li class="list-group-item">
              <img class="rounded-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_DIRECTORY']->value;?>
/images/banderas/bandera-cordoba.png"
                alt="bandera-cordoba">
              <div class="">
                <a class="card-link" href="">
                  Abierto Plazo Bolsa de Trabajo de Auxiliar de Archivo y Biblioteca en el
                  Ayuntamiento de
                  Burgos (Burgos)
                </a>
              </div>
              <div class="date">
                23/3/21 8:41
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md order-2" id="content">
      <nav aria-label="breadcrumb" class="sticky-top breadcrumb-nav d-none d-lg-block">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Cuidado!</strong> Este es un mensaje
      </div>
      <div class="page-header">
        <h2>Temas de las fotografías</h2>
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
    </div>
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
        <a class="btn btn-outline-light m-2" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn btn-outline-light m-2" href="#!" role="button"><i class="fab fa-github"></i></a>
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
}
