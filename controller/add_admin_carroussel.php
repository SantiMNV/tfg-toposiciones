<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin/Carroussel", "Añadir slide", "", "slug", "");
$alerts = array();

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('add_admin_carroussel.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
