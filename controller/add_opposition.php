<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Añadir convocatoria", "", "slug", "");

$alerts = array();


if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 5) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $go_to = "add_oppostion.html";
      //if(isset($_POST['input-theme-name'] && isset($_POST)))
      switch (addOpposition($_POST)) {
        case "add-opposition-success":
          $alerts = array(
            "Convocatoria creada correctamente. " => "alert-success"
          );
          $added_opposition = getLastOppositionId();
          $smarty->assign('alerts', $alerts);
          $smarty->assign('page', $page);
          //          $smarty->display('/toposiciones/convocatorias/convocatoria/' . $added_opposition);
          header('Location: /toposiciones/convocatorias/convocatoria/' . $added_opposition);
          break;
        case "add-opposition-failure":
          $alerts = array(
            "Ha ocurrido un fallo al crear la convocatoria, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
          );
          break;
        default:
          break;
      }
    }

    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);

    $smarty->display('add_opposition.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
