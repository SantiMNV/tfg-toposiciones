<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Admin/convocatorias/categorias/", "Añadir Categoría", "", "slug", "");

if (isset($_SESSION['login_user'])) {
  if ($_SESSION['login_access_level'] >= 10) {
    $smarty->assign('alerts', $alerts);
    $smarty->assign('page', $page);
    $smarty->display('opposition_category_add.html');
  } else {
    header('Location: /toposiciones/');
  }
} else {
  header('Location: /toposiciones/');
}
