<?php
require('./config/urls.php');
global $smarty;
$page = new Page("", "Inicio", "Titulo", "slug", "");

$smarty->assign('alerts', array());
$smarty->assign('page', $page);
$carroussel = getCarroussel();
$smarty->assign('carroussel', $carroussel);
$smarty->assign('carrousselSize', $carroussel->rowCount());

$smarty->display('main_layout.html');
