<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Solucion","Convocatorias", "Últimas convocatorias", "slug", "");

$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");
$smarty->assign("all_themes", getThemes()->fetchAll());

$smarty->display('soluciones.html');
