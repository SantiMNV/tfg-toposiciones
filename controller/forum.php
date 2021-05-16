<?php
require('./config/urls.php');
global $smarty;
$page = new Page("Foro", "Foro", "", "slug", "");
$smarty->assign('page', $page);
$alerts = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['search-request'])) {
    if ($_POST['search-request'] == "search") {
      if (isset($_POST['txtSearch'])) {
        $ids = getPostsParams($_POST['txtSearch']);
        $postList = array();
        if (sizeof($ids) > 0) {
          for ($i = 0; $i < sizeof($ids); $i++) {
            array_push($postList, getPostsShortId($ids[$i])->fetch());
          }
          $alerts = array(
            "Se han encontrado " . sizeof($ids) . " coincidencias. " => "alert-success"
          );
        } else {
          $alerts = array(
            "No se han contrado coincidencias para: " . $_POST['txtSearch'] . ". " => "alert-danger"
          );
        }
      }
    }
  }
}

if (isset($postList)) {
  $smarty->assign("all_posts", $postList);
} else {
  $smarty->assign("all_posts", getPosts(0)->fetchAll());
}

$smarty->assign('alerts', $alerts);
$smarty->display('forum.html');
