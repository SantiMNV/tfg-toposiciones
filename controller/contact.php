<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Contacto", "Contacta con nosotros", "", "slug", "");
$alerts = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['send-request'])) {
    if ($_POST['send-request'] == "send") {
      //if(isset($_POST['input-theme-name'] && isset($_POST)))
      switch (sendContact($_POST)) {
        case "send-success":
          $alerts = array(
            "El mensaje se ha enviado correctamente. " => "alert-success"
          );
          break;
        case "send-failure":
          $alerts = array(
            "Ha ocurrido un fallo al enviar el mensaje, inténtelo de nuevo o contacte a soporte@toposiciones.com" => "alert-danger"
          );
          break;
        case "nei":
          $alerts = array(
            "Debes rellenar todos los campos" => "alert-danger"
          );
          break;
        default:
          break;
      }
    }
  }
}
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->display('contact.html');
