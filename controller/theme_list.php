<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/themes.php");
global $smarty;
$page = new Page("Temas", "Lista Temas", "Listado de temas", "slug", "");

$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if ($_POST['remove-request'] == "remove") {
        switch (removeTheme($_POST['remove-theme'])) {
          case "remove-theme-success":
            $alerts = array(
              "Tema eliminado correctamente. " => "alert-success"
            );
            break;
          case "remove-theme-failure":
            $alerts = array(
              "Ha ocurrido un fallo al eliminar el tema, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-warning"
            );
            break;
          default:
            break;
        }
      }
    }
    $smarty->assign("all_themes", listThemes()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);

    $smarty->display('theme_list.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
