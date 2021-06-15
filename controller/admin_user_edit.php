<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Editar usuario", "Editar Usuarios", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['edit-request'])) {
        if ($_POST['edit-request'] == "edit") {
          $editResult = editUserFull($_POST);
          switch ($editResult) {
            case "edit-success":
              $alerts["Usuario correctamente editado. "] = "alert-success";
              break;
            case "edit-failure":
              $alerts["Ha ocurrido un fallo al editar el usuario, vuelva a intentarlo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            case "nei":
              $alerts["Debes rellenar todos los campos"] = "alert-danger";
            default:
              break;
          }
        }
      }
    }
    $smarty->assign("user", getUser($_GET['id']));
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('admin_user_edit.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
