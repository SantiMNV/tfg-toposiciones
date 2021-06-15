<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Foro", "", "", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_SESSION['login_access_level'] >= 8) {
      if (isset($_POST['remove-request'])) {
        if ($_POST['remove-request'] == "post") {
          switch (removePost($_POST['remove-post'])) {
            case "remove-post-success":
              $alerts["Post eliminado correctamente. "] = "alert-success";
              header('Location: /toposiciones/foro/');
              break;
            case "remove-post-failure":
              $alerts["Ha ocurrido un fallo al eliminar el post, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
        if ($_POST['remove-request'] == "message") {
          switch (removeMessage($_POST['remove-message'])) {
            case "remove-message-success":
              $alerts["Mensaje eliminado correctamente. "] = "alert-success";
              break;
            case "remove-theme-failure":
              $alerts["Ha ocurrido un fallo al eliminar el mensaje, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
    }
    if (isset($_POST['message-request'])) {
      if ($_POST['message-request'] == "message") {
        switch (addMessage($_POST)) {
          case "add-message-success":
            $alerts["Mensaje añadido correctamente. "] = "alert-success";
            break;
          case "add-theme-failure":
            $alerts["Ha ocurrido un fallo al añadir el mensaje, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
            break;
          case "nei":
            $alerts["Debes rellenar todos los campos"] = "alert-danger";
          default:
            break;
        }
      }
    }
  }
}
$smarty->assign("post", getPost($_GET['id'])->fetchAll());
$smarty->assign("messages", getMessages($_GET['id'])->fetchAll());
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->display('forum_post.html');
