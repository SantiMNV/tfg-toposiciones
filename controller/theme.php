<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/themes.php");
global $smarty;
$page = new Page("Temas", "Tema", "Tema", "slug", "");
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->assign("all_themes", getTheme($_GET['id'])->fetchAll());
$smarty->display('theme.html');
