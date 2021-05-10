<?php
require('./config/urls.php');

$cookies_accepted = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['cookie_compliance'])) {
    if ($_POST['cookie_compliance'] == "accept") {
      //php_console_log("PONGO LA COOKIE");
      $cookies_accepted = true;
      setcookie("cookies_accepted", "accepted", time() + (86400 * 30), "/");
      session_start();
    }
  }
}
global $smarty;
$smarty->assign("cookies_accepted", $cookies_accepted);
$page = new Page("", "Inicio", "Titulo", "slug", "");


$smarty->assign('alerts', array());
$smarty->assign('page', $page);


$smarty->display('main_layout.html');
