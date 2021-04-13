<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Login", "Login", "slug", "");


$alerts = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($_POST['login-request'] == "login") {
    $loginResult = loginUser($_POST);
    switch ($loginResult) {
      case "login-success":
        $alerts = array(
          "Usuario correctamente logueado. " => "alert-success"
        );
        break;
      case "login-failure":
        $alerts = array(
          "Usuario o contraseña incorrectos, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
        );
        break;
      default:
        break;
    }
  } else {
    $registerResult = registerUser($_POST);
    switch ($registerResult) {
      case "registered":
        $alerts = array(
          "El usuario ya existe, por favor haga login. " => "alert-warning"
        );
        break;
      case "register-success":
        $alerts = array(
          "Usuario correctamente registrado, acceda a la página usando el login. " => "alert-success"
        );
        header('/toposiciones/');
        break;
      case "register-failure":
        $alerts = array(
          "Ha ocurrido un fallo al registrar el usuario, vuelva a intentarlo o contacte a soporte@toposiciones.com" => "alert-danger"
        );
        break;
      default:
        break;
    }
  }

  //$smarty->display('profile.html');
} else {
  //$smarty->display('login.html');
}

$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->display('login.html');
