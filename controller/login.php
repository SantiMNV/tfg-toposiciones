<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Login", "Login", "Login", "slug", "");


$alerts = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($_POST['login-request'] == "login") {
    $loginResult = loginUser($_POST);
    switch ($loginResult) {
      case "login-success":
        $alerts = array(
          "Usuario correctamente logueado. " => "alert-success"
        );
        header('Location: /toposiciones/perfil/');
        break;
      case "login-failure":
        $alerts = array(
          "Usuario o contraseña incorrectos, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
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
