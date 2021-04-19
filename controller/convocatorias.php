<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias", "Últimas convocatorias", "slug", "");


$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign("all_oppositions", getOppositions(0)->fetchAll());



if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $smarty->assign("all_oppositions", getOppositionParams($_POST)->fetchAll());
}
$smarty->display('convocatorias.html');
