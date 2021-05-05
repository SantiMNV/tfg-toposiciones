<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Error 404", "Error 404", "Error 404", "", "");
$smarty->assign('alerts', array());
$smarty->assign('page', $page);

$smarty->display('404.html');
