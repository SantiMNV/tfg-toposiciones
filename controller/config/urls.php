<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const SMARTY_LIB = "../view/smarty_lib";
const SMARTY_DIRECTORY = "../view/smarty";
const MODEL_DIRECTORY = "../model";
const MEDIA_DIRECTORY = "view/media";
const CSS_DIRECTORY = "view/css";
const JS_DIRECTORY = "view/js";

require(SMARTY_LIB . '/libs/Smarty.class.php');
require(MODEL_DIRECTORY . "/include/Page.php");

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
