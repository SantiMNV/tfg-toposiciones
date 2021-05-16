<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/themes.php");
global $smarty;
$page = new Page("Temas", "Añadir tema", "", "slug", "");
$alerts = array();

if (isset($_SESSION['login_user'])) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //if(isset($_POST['input-theme-name'] && isset($_POST)))
    switch (addTheme($_POST)) {
      case "add-theme-success":
        $alerts = array(
          "Tema creado correctamente. " => "alert-success"
        );
        break;
      case "add-theme-failure":
        $alerts = array(
          "Ha ocurrido un fallo al crear el tema, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
        );
        break;
      default:
        break;
    }
  }
  $smarty->assign('alerts', $alerts);
  $smarty->assign('page', $page);

  $smarty->display('add_theme.html');
} else {
  header('Location: /toposiciones/');
}
