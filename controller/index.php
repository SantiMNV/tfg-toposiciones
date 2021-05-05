<?php

require('./config/urls.php');
global $smarty;
$page = new Page("", "Inicio", "Titulo", "slug", "");


$smarty->assign('alerts', array());
$smarty->assign('page', $page);


$smarty->display('main_layout.html');
