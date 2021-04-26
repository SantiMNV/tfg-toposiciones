<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Solucion","Tema", "Tema", "slug", "");


$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->assign("all_themes", getTheme($_GET['id'])->fetchAll());
$smarty->display('tema.html');
