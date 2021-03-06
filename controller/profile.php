<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Perfil", "Perfil", "", "slug", "");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($_POST['edit-request'] == "edit") {
    switch (editUser($_POST)) {
      case "edit-success":
        $alerts["Usuario editado correctamente. "] = "alert-success";
        break;
      case "edit-failure":
        $alerts["Ha ocurrido un fallo al editar el usuario, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
        break;
      case "nei":
        $alerts["Debes rellenar todos los campos"] = "alert-danger";
      default:
        break;
    }
  }
  if ($_POST['edit-request'] == "logout") {
    session_unset();
  }
}

$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->display('profile.html');
