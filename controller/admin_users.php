<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Lista usuarios", "Listado de usuarios", "slug", "");
$alerts = array();

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if ($_POST['remove-request'] == "remove") {
        switch (removeUser($_POST['remove-user'])) {
          case "remove-user-success":
            $alerts = array(
              "Usuario eliminado correctamente. " => "alert-success"
            );
            break;
          case "remove-user-failure":
            $alerts = array(
              "Ha ocurrido un fallo al eliminar el usuario, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
            );
            break;
          default:
            break;
        }
      }
    }
    $smarty->assign("all_users", getUsers()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    //resetPasswordMail();
    $smarty->display('admin_users.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
