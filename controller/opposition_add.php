<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias", "Añadir convocatoria", "", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 1) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      switch (addOpposition($_POST)) {
        case "add-opposition-success":
          $alerts["Convocatoria creada correctamente. "] = "alert-success";
          $added_opposition = getLastOppositionId();
          $smarty->assign('alerts', $alerts);
          $smarty->assign('page', $page);
          header('Location: /toposiciones/convocatorias/convocatoria/' . $added_opposition);
          break;
        case "add-opposition-failure":
          $alerts["Ha ocurrido un fallo al crear la convocatoria, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
          break;
        case "nei":
          $alerts["Debes rellenar todos los campos"] = "alert-danger";
        default:
          break;
      }
    }
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('opposition_add.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
