<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/states.php");
require(MODEL_DIRECTORY . "/include/categories.php");
global $smarty;
$page = new Page("Convocatorias", "Convocatorias", "Últimas convocatorias", "slug", "");

$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign("all_oppositions", getOppositions(0)->fetchAll());

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['sendStatus']) && isset($_POST['sendDate']) && isset($_POST['sendCategory']) && isset($_POST['sendState']))
    $smarty->assign("all_oppositions", getOppositionParams($_POST)->fetchAll());
}
$smarty->display('oppositions.html');
