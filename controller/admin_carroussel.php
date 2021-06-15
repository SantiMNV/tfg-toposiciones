<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin", "Carroussel", "Carroussel", "slug", "");
if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['add-request'])) {
        if ($_POST['add-request'] == "add") {
          switch (addSlide($_POST)) {
            case "add-carroussel-success":
              $alerts["Slide creado correctamente. "] = "alert-success";
              break;
            case "add-carroussel-failure":
              $alerts["Ha ocurrido un fallo al crear el slide, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            case "add-carroussel-failure-notimage":
              $alerts["Ha ocurrido un fallo al crear el slide, has de introducir una imagen"] = "alert-danger";
              break;
            case "add-carroussel-failure-fileexists":
              $alerts["Ha ocurrido un fallo al crear el slide, el fichero ya existe"] = "alert-danger";
              break;
            case "add-carroussel-failure-unsupportedfiletype":
              $alerts["Ha ocurrido un fallo al crear el slide, formato de imagen no soportada, ha de ser png,jpg,jpeg,gif"] = "alert-danger";
              break;
            case "nei":
              $alerts["Debes rellenar todos los campos"] = "alert-danger";
            default:
              break;
          }
        }
      }
      if (isset($_POST["remove-request"])) {
        if ($_POST['remove-request'] == "remove") {
          switch (removeSlide($_POST["remove-slide"])) {
            case "remove-carroussel-success":
              $alerts["Slide eliminado correctamente. "] = "alert-success";
              break;
            case "remove-carroussel-failure":
              $alerts["Ha ocurrido un fallo al eliminar el slide, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            default:
              break;
          }
        }
      }
      if (isset($_POST["move-request"])) {
        if ($_POST['move-request'] == "up" || $_POST['move-request'] == "down") {
          switch (moveSlide($_POST["move-slide"], $_POST['move-request'])) {
            case "move-success":
              $alerts["Slide movido correctamente. "] = "alert-success";
              break;
            case "move-failure":
              $alerts["Ha ocurrido un fallo al mover el slide, inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-danger";
              break;
            case "move-failure-already-in-position":
              $alerts["Ha ocurrido un fallo al mover el slide, ya está en la posición inténtelo de nuevo o contacte a soporte@toposiciones.com"] = "alert-warning";
              break;
            default:
              break;
          }
        }
      }
    }
    $smarty->assign('alerts', $alerts);
    $smarty->assign('carroussel', getCarroussel());
    $smarty->assign('page', $page);
    $smarty->display('admin_carroussel.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
