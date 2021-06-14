<?php
require('./config/urls.php');
global $smarty;
$page = new Page("admin/notificaciones", "Notificaciones", "Listado de notificaciones", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['remove-request'])) {
        if ($_POST['remove-request'] == "remove") {
          switch (removeNotification($_POST['remove-notification'])) {
            case "remove-ambit-success":
              $alerts["Notificación eliminada correctamente. "] = "alert-success";
              break;
            case "remove-ambit-failure":
              $alerts["Ha ocurrido un fallo al eliminar la notificatión, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
    }
    if (isset($_POST['add-request'])) {
      if ($_POST['add-request'] == "add") {
        switch (addNotification($_POST)) {
          case "add-notification-success":
            $alerts["Notificación creada correctamente. "] = "alert-success";
            break;
          case "add-notification-failure":
            $alerts["Ha ocurrido un fallo al crear la notificación, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
            break;
          case "add-notification-failure-alreadyexists":
            $alerts["Ha ocurrido un fallo al crear la notificación, ya existe"] = "alert-warning";
            break;
          case "nei":
            $alerts["Debes rellenar todos los campos"] = "alert-danger";
          default:
            break;
        }
      }
    }
    $alerts = getNotifications();

    $smarty->assign("notifications", getAllNotifications()->fetchAll());
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('admin_notifications.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
