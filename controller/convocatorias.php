<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias", "Últimas convocatorias", "slug", "");


$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->assign("all_oppositions", getOppositions(0)->fetchAll());

$smarty->display('convocatorias.html');
