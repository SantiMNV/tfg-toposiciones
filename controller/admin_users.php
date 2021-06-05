<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Lista usuarios", "Listado de usuarios", "slug", "");

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
      } else if (isset($_POST['search-request'])) {
        if ($_POST['search-request'] == "search") {
          if (isset($_POST['txtSearch'])) {
            $ids = getUsersParams($_POST['txtSearch']);
            $userList = array();
            if (sizeof($ids) > 0) {
              for ($i = 0; $i < sizeof($ids); $i++) {
                array_push($userList, getUser($ids[$i]));
              }
              $alerts["Se han encontrado " . sizeof($ids) . " coincidencias. "] = "alert-success";
            } else {
              $alerts["No se han contrado coincidencias para: " . $_POST['txtSearch'] . ". "] = "alert-danger";
            }
          }
        }
      }
    }
    if (isset($userList)) {
      $smarty->assign("all_users", $userList);
    } else {
      $smarty->assign("all_users", getUsers()->fetchAll());
    }
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('admin_users.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
