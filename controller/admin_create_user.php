<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Crear usuario", "Crear Usuarios", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['remove-request'])) {
        if ($_POST['remove-request'] == "remove") {
          switch (removeUser($_POST['remove-user'])) {
            case "remove-user-success":
              $alerts["Usuario eliminado correctamente. "] = "alert-success";
              break;
            case "remove-user-failure":
              $alerts["Ha ocurrido un fallo al eliminar el usuario, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
      if (isset($_POST['register-request'])) {
        if ($_POST['register-request'] == "register") {
          $registerResult = registerUser($_POST);
          switch ($registerResult) {
            case "registered":
              $alerts["El usuario ya existe. "] = "alert-warning";
              break;
            case "register-success":
              $alerts["Usuario correctamente registrado. "] = "alert-success";
              header('Location: /toposiciones/admin/usuarios/');
              break;
            case "register-failure":
              $alerts["Ha ocurrido un fallo al registrar el usuario, vuelva a intentarlo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            case "nei":
              $alerts["Debes rellenar todos los campos"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
    }
    $smarty->assign("all_users", getUsers()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('admin_create_user.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
