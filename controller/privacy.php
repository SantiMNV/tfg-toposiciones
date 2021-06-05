<?php
require('./config/urls.php');
global $smarty;
$page = new Page("", "Privacidad", "Política de privacidad", "slug", "");
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);

$smarty->display('privacy.html');
