<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias/ambitos", "Lista Ámbitos", "Listado de ámbitos", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 8) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['remove-request'])) {
        if ($_POST['remove-request'] == "remove") {
          switch (removeAmbit($_POST['remove-ambit'])) {
            case "remove-ambit-success":
              $alerts["Ámbito eliminado correctamente. "] = "alert-success";
              break;
            case "remove-ambit-failure":
              $alerts["Ha ocurrido un fallo al eliminar el ámbito, compruebe que no tenga categorías o inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
    }

    if (isset($_POST['add-request'])) {
      if ($_POST['add-request'] == "add") {
        switch (addAmbit($_POST)) {
          case "add-ambit-success":
            $alerts["Ámbito creado correctamente. "] = "alert-success";
            break;
          case "add-ambit-failure":
            $alerts["Ha ocurrido un fallo al crear el ámbito, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
            break;
          case "add-ambit-failure-alreadyexists":
            $alerts["Ha ocurrido un fallo al crear el ámbito, ya existe"] = "alert-warning";
            break;
          case "nei":
            $alerts["Debes rellenar todos los campos"] = "alert-danger";
            break;
          default:
            break;
        }
      }
    }

    $smarty->assign("ambits", getAmbits()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('opposition_ambit_list.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
