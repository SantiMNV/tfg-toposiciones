<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Convocatorias", "Convocatoria", "Convocatoria", "slug", "");
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->assign("all_oppositions", getOpposition($_GET['id'])->fetchAll());
$smarty->display('opposition.html');
