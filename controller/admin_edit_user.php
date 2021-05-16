<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Editar usuario", "Editar Usuarios", "slug", "");
$alerts = array();

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['edit-request'])) {
        if ($_POST['edit-request'] == "edit") {
          $editResult = editUserFull($_POST);
          switch ($editResult) {
            case "edit-success":
              $alerts = array(
                "Usuario correctamente editado. " => "alert-success"
              );
              break;
            case "edit-failure":
              $alerts = array(
                "Ha ocurrido un fallo al editar el usuario, vuelva a intentarlo o contacte a soporte@toposiciones.com" => "alert-danger"
              );
              break;
            default:
              break;
          }
        }
      }
    }
    $smarty->assign("user", getUser($_GET['id']));
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('admin_edit_user.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
