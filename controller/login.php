<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Login", "Login", "Login", "slug", "");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['login-btn'])) {
    $loginResult = loginUser($_POST);
    switch ($loginResult) {
      case "login-success":
        $alerts["Usuario correctamente logueado. "] = "alert-success";
        header('Location: /toposiciones/perfil/');
        break;
      case "login-failure":
        $alerts["Usuario o contraseña incorrectos, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
        break;
      default:
        break;
    }
  }
  if (isset($_POST['reset-btn'])) {
    $resetResult = sendResetPW($_POST);
    switch ($resetResult) {
      case "reset-success":
        $alerts["Le llegará un correo lo antes posible con su nueva contraseña. "] = "alert-success";
        break;
      case "reset-failure":
        $alerts["No se ha podido procesar su petición, vuelva a intentarlo"] = "alert-danger";
        break;
      case "nei":
        $alerts["Debes introducir el email asociado a tu cuenta"] = "alert-danger";
        break;
      default:
        break;
    }
  }
}

$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->display('login.html');
