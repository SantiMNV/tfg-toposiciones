<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/themes.php");
global $smarty;
$page = new Page("Temas", "Añadir tema", "", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //if(isset($_POST['input-theme-name'] && isset($_POST)))
    $status = addTheme($_POST);
    switch ($status) {
      case str_starts_with($status, "add-theme-success"):
        $createdThemeId = explode("-", $status)[3];
        header('Location: /toposiciones/temas/tema/' . $createdThemeId);
        break;
      case "add-theme-failure":
        $alerts["Ha ocurrido un fallo al crear el tema, inténtelo de nuevo o contacte a soporte@toposiciones.com "] = "alert-danger";
        break;
      default:
        break;
    }
  }
  $smarty->assign('alerts', $alerts);
  $smarty->assign('page', $page);

  $smarty->display('theme_add.html');
} else {
  header('Location: /toposiciones/');
}
