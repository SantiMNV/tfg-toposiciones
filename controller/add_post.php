<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Añadir post", "", "slug", "");

$alerts = array();


if (isset($_SESSION['login_user'])) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //if(isset($_POST['input-theme-name'] && isset($_POST)))
    switch (addPost($_POST)) {
      case "add-theme-success":
        $alerts = array(
          "Post creado correctamente. " => "alert-success"
        );
        break;
      case "add-theme-failure":
        $alerts = array(
          "Ha ocurrido un fallo al crear el post, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
        );
        break;
      default:
        break;
    }
  }
  $smarty->assign('alerts', $alerts);
  $smarty->assign('page', $page);

  $smarty->display('add_post.html');
} else {
  header('Location: /toposiciones/');
}
