<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const MAIN_DIRECTORY = "/srv/http/toposiciones";
const PUBLIC_DIRECTORY = "/toposiciones";

const SMARTY_LIB = MAIN_DIRECTORY . "/view/smarty_lib";
const SMARTY_DIRECTORY = MAIN_DIRECTORY . "/view/smarty";
const MODEL_DIRECTORY = MAIN_DIRECTORY . "/model/";
const MEDIA_DIRECTORY = PUBLIC_DIRECTORY . "/view/media";
const CSS_DIRECTORY = PUBLIC_DIRECTORY . "/view/css";
const JS_DIRECTORY = PUBLIC_DIRECTORY . "/view/js";

require(SMARTY_LIB . '/libs/Smarty.class.php');
require(MODEL_DIRECTORY . "/include/Page.php");
require(MODEL_DIRECTORY . "/include/pdo_connection.php");
require(MODEL_DIRECTORY . "/include/get_oppositions.php");

$smarty = new Smarty;

$smarty->template_dir = SMARTY_DIRECTORY . '/main/templates';
$smarty->compile_dir = SMARTY_DIRECTORY . '/main/templates_c/';
$smarty->config_dir = SMARTY_DIRECTORY . '/main/configs/';
$smarty->cache_dir = SMARTY_DIRECTORY . '/main/cache/';
$smarty->addTemplateDir(array(
  'layouts' => SMARTY_DIRECTORY . '/main/templates/layouts',
));

$smarty->assign('MEDIA_DIRECTORY', MEDIA_DIRECTORY);
$smarty->assign('CSS_DIRECTORY', CSS_DIRECTORY);
$smarty->assign('JS_DIRECTORY', JS_DIRECTORY);

require("urlify.php");
$smarty->registerPlugin('function', 'urlify', 'urlify');


$smarty->assign("oppositions", getOppositions(5)->fetchAll());

$crumbs = explode("/", $_SERVER["REQUEST_URI"]);
$breadCrumbs = array();
foreach ($crumbs as $crumb) {
  array_push($breadCrumbs, ucfirst(str_replace(array(".php", "_"), array("", " "), $crumb)));
}
array_shift($breadCrumbs);
array_pop($breadCrumbs);
$smarty->assign('breadCrumbs', $breadCrumbs);
