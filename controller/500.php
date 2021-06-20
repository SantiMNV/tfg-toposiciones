<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Error 500", "Error 500", "Error 500", "", "");
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->display('404.html');
