<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias", "Últimas convocatorias", "slug", "");


$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->display('main_layout.html');
