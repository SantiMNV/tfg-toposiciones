<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Temas","Temas", "Temas", "slug", "");



$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->assign("all_themes", getThemes()->fetchAll());

$smarty->display('temas.html');
