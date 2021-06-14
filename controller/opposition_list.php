<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias", "Lista Convocatorias", "Listado de convocatorias", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 8) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if ($_POST['remove-request'] == "remove") {
        switch (removeOpposition($_POST['remove-theme'])) {
          case "remove-theme-success":
            $alerts["Tema eliminado correctamente. "] = "alert-success";
            break;
          case "remove-theme-failure":
            $alerts["Ha ocurrido un fallo al eliminar el tema, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
            break;
          default:
            break;
        }
      }
    }
    $smarty->assign("all_oppositions", getOppositionsList()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('opposition_list.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
