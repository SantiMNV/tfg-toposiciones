<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/themes.php");
global $smarty;
$page = new Page("Temas", "Temas", "Temas", "slug", "");
$smarty->assign('page', $page);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['search-request'])) {
    if ($_POST['search-request'] == "search") {
      if (isset($_POST['txtSearch'])) {
        $ids = getThemesParams($_POST['txtSearch']);
        $themeList = array();
        if (sizeof($ids) > 0) {
          for ($i = 0; $i < sizeof($ids); $i++) {
            array_push($themeList, getThemeShortId($ids[$i]));
          }
          $alerts["Se han encontrado " . sizeof($ids) . " coincidencias. "] = "alert-success";
        } else {
          $alerts["No se han contrado coincidencias para: " . $_POST['txtSearch'] . ". "] = "alert-danger";
        }
      }
    }
  }
}

if (isset($themeList)) {
  $smarty->assign("all_themes", $themeList);
} else {
  $smarty->assign("all_themes", getThemes()->fetchAll());
}
$smarty->assign('alerts', $alerts);
$smarty->display('themes.html');
