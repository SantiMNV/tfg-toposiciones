<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatoria", "Convocatoria", "slug", "");


$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->assign("all_oppositions", getOpposition($_GET['id'])->fetchAll());
$smarty->display('convocatoria.html');
