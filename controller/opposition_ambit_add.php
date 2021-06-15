<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin/convocatorias/ambitos/", "Añadir Ámbito", "", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 8) {
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('opposition_ambit_add.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
