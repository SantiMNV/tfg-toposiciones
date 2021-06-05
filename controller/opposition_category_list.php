<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/categories.php");
global $smarty;
$page = new Page("Convocatorias", "Lista Convocatorias", "Listado de convocatorias", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['remove-request'])) {
        if ($_POST['remove-request'] == "remove") {
          switch (removeCategory($_POST['remove-category'])) {
            case "remove-category-success":
              $alerts["Categoría eliminada correctamente. "] = "alert-success";
              break;
            case "remove-category-failure":
              $alerts["Ha ocurrido un fallo al eliminar la categoría, compruebe que no tenga convocatorias o inténtelo de nuevo o contacte a soporte@toposiciones.com"] =  "alert-danger";
              break;
            default:
              break;
          }
        }
      }
      if (isset($_POST['add-request'])) {
        if ($_POST['add-request'] == "add") {
          switch (addCategory($_POST)) {
            case "add-category-success":
              $alerts["Categoría añadida correctamente. "] = "alert-success";
              break;
            case "add-category-failure":
              $alerts["Ha ocurrido un fallo al añadir la categoría, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
    }
    $smarty->assign("categories", getCategories()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('opposition_category_list.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
