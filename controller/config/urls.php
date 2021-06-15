<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function php_console_log($data) {
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}

const MAIN_DIRECTORY = "/srv/http/toposiciones";
//const MAIN_DIRECTORY = "/var/www/html/toposiciones";
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
require(MODEL_DIRECTORY . "/include/forums.php");
require(MODEL_DIRECTORY . "/include/user.php");
require(MODEL_DIRECTORY . "/include/admin.php");
require(MODEL_DIRECTORY . "/include/carroussel.php");
require(MODEL_DIRECTORY . "/include/ambit.php");
require(MODEL_DIRECTORY . "/include/notifications.php");

$alerts = getNotifications();

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

// For static data sections
$smarty->assign("oppositions", getOppositions(5)->fetchAll());
$smarty->assign("side_messages", getPostsSummary(5)->fetchAll());


// Receive the url
$crumbs = explode("/", $_SERVER["REQUEST_URI"]);
$breadCrumbs = array();
$lastCrumb = "";
for ($i = 0; $i < sizeof($crumbs); $i++) {
  if ($i != sizeof($crumbs) - 1 && !is_numeric($crumbs[$i])) {
    if ($i > 2) {
      $breadCrumbs[ucfirst($crumbs[$i])] = $lastCrumb . "/" . ucfirst($crumbs[$i] . "/");
    } else {
      $breadCrumbs[ucfirst($crumbs[$i])] = ucfirst($crumbs[$i] . "/");
    }
    $lastCrumb = ucfirst($crumbs[$i]);
  }
}
// Removes the first bc are empty
array_shift($breadCrumbs);
$smarty->assign('breadCrumbs', $breadCrumbs);

$cookies_accepted = false;
function cookieManager() {
  $cookies_accepted = false;
  if (isset($_COOKIE['cookies_accepted'])) {
    $cookies_accepted = true;
    session_start();
  } else {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (isset($_POST['cookie_compliance'])) {
        if ($_POST['cookie_compliance'] == "accept") {
          $cookies_accepted = true;
          setcookie("cookies_accepted", "accepted", time() + (86400 * 30), "/");
          session_start();
        }
      }
    }
  }
  return $cookies_accepted;
}
$smarty->assign('cookies_accepted', cookieManager());
