<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


const MAIN_DIRECTORY = "/srv/http/toposiciones";
//const MAIN_DIRECTORY = "C:\\xampp\\htdocs\\toposiciones";
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
require(MODEL_DIRECTORY . "/include/oppositions.php");
require(MODEL_DIRECTORY . "/include/themes.php");
require(MODEL_DIRECTORY . "/include/user.php");
require(MODEL_DIRECTORY . "/include/states.php");
require(MODEL_DIRECTORY . "/include/categories.php");
require(MODEL_DIRECTORY . "/include/forums.php");
require(MODEL_DIRECTORY . "/include/admin.php");

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
$smarty->assign("side_messages", getPostsSummary(5)->fetchAll());

// Receive the url
//php_console_log($_SERVER["REQUEST_URI"]);
$crumbs = explode("/", $_SERVER["REQUEST_URI"]);
$breadCrumbs = array();
foreach ($crumbs as $crumb) {
  //php_console_log("URL: " . ucfirst(str_replace(array(".php", "_"), array("", " "), $crumb)));
  array_push($breadCrumbs, ucfirst(str_replace(array(".php", "_"), array("", " "), $crumb)));
}
// Remove the first bc are empty
array_shift($breadCrumbs);
array_pop($breadCrumbs);


function php_console_log($data) {
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}

$smarty->assign('breadCrumbs', $breadCrumbs);
