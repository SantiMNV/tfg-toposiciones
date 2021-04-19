<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Foro", "", "slug", "");


$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign("all_posts", getPosts(0)->fetchAll());

$smarty->display('forum.html');
