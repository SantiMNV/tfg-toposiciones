<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Administración", "Mensajes pendientes", "slug", "");
$alerts = array();

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['remove-request'])) {
        if ($_POST['remove-request'] == "remove") {
          switch (removeAdminMessage($_POST['remove-message'])) {
            case "remove-message-success":
              $alerts = array(
                "Mensaje eliminado correctamente. " => "alert-success"
              );
              break;
            case "remove-message-failure":
              $alerts = array(
                "Ha ocurrido un fallo al eliminar el mensaje, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
              );
              break;
            default:
              break;
          }
        }
      }
      if (isset($_POST['readed-request'])) {
        if ($_POST['readed-request'] == "readed") {
          switch (updateRead($_POST['read-message'], $_POST['read-readed'])) {
            case "update-read-success":
              $alerts = array(
                "Mensaje {$_POST['read-message']} actualizado. " => "alert-success"
              );
              break;
            case "update-read-failure":
              $alerts = array(
                "Ha ocurrido un fallo al actualizar el mensaje, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
              );
              break;
            default:
              break;
          }
        }
      }
      if (isset($_POST['changepw-request'])) {
        if ($_POST['changepw-request'] == "change") {
          $status = changePassword($_POST['changepw-messageId'], $_POST['changepw-userMail']);
          switch ($status) {
            case substr($status, 0, 17) === "update-pw-success":
              $alerts = array(
                "Mensaje actualizado. "  => "alert-success"
              );
              $smarty->assign('newpw', substr($status, 18, strlen($status)));
              $smarty->assign('changepw_userMail', $_POST['changepw-userMail']);
              break;
            case "update-pw-failure":
              $alerts = array(
                "Ha ocurrido un fallo al actualizar el mensaje, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
              );
              break;
            default:
              break;
          }
        }
      }
    }
    $smarty->assign("all_admin_messages", getAdminMessages()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('admin.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
