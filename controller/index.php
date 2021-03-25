<?php

require('./config/urls.php');
global $smarty;
$page = new Page("Primera", "Titulo", "slug");

$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->display('main_layout.html');
