<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Foro", "Añadir post", "", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //if(isset($_POST['input-theme-name'] && isset($_POST)))
    switch (addPost($_POST)) {
      case "add-theme-success":
        $alerts["Post creado correctamente. "] = "alert-success";
        break;
      case "add-theme-failure":
        $alerts["Ha ocurrido un fallo al crear el post, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
        break;
      case "nei":
        $alerts["Debes rellenar todos los campos"] = "alert-danger";
      default:
        break;
    }
  }
  $smarty->assign('alerts', $alerts);
  $smarty->assign('page', $page);

  $smarty->display('forum_post_add.html');
} else {
  header('Location: /toposiciones/');
}
