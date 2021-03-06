<?php
require("pdo_connection.php");

function getThemes() {
  global $conn;
  $sql = "SELECT theme.themeId,theme.theme_name,LEFT(theme.content,200) as content,theme.theme_category,user.user_name FROM theme,user,opposition_category where theme.theme_category = opposition_category.categoryId and theme.userId = user.userId order by theme.created_at desc";
  $resultado = $conn->query($sql);
  return $resultado;
}

function getThemeShortId($id) {
  global $conn;
  $sql = "SELECT theme.themeId,theme.theme_name,LEFT(theme.content,200) as content,theme.theme_category,user.user_name FROM theme,user,opposition_category where theme.theme_category = opposition_category.categoryId and theme.userId = user.userId and theme.themeId = " . $id . " order by theme.created_at desc";
  $resultado = $conn->query($sql);
  return $resultado->fetch();
}

function getTheme($id) {
  global $conn;
  $sql = "SELECT theme.themeId,theme.theme_name,theme.content,opposition_category.category_name,user.user_name FROM theme,user,opposition_category where theme.theme_category = opposition_category.categoryId and theme.userId = user.userId and theme.themeId = " . $id;
  $resultado = $conn->query($sql);
  return $resultado;
}

function listThemes() {
  global $conn;
  $sql = "SELECT theme.themeId,theme.theme_name,LEFT(theme.content,200) as content,theme.theme_category,user.user_name,opposition_category.category_name,theme.created_at FROM theme,user,opposition_category where theme.theme_category = opposition_category.categoryId and theme.userId = user.userId order by theme.created_at desc";
  $resultado = $conn->query($sql);
  return $resultado;
}

function addTheme($post) {
  global $conn;
  // *** TRANSACTION ***
  $theme_name = $post['input-theme-name'] ?? "";
  $theme_category = $post['input-theme-category'] ?? "";
  $theme_content = $post['input-theme-content'] ?? "";

  if (!empty($theme_name) && !empty($theme_category) && !empty($theme_content)) {
    $ok = true;
    $conn->beginTransaction();
    $sql = "INSERT into theme values(null,'{$theme_name}',{$theme_category},'{$theme_content}','{$_SESSION['login_userId']}',now())";

    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $sql = "SELECT themeId from theme order by created_at DESC limit 1";
      $themeId = $conn->query($sql)->fetch()[0];
      $status = "add-theme-success-" . $themeId;
    } else {
      $conn->rollback();
      $status = "add-theme-failure";
    }
  }
  return $status;
}

function getThemesParams($txtSearch) {
  global $conn;
  $sql = "SELECT * FROM theme where theme_name like '%" . $txtSearch . "%' or content like '%" . $txtSearch . "%' ";
  $resultado = $conn->query($sql);
  $ids = array();
  while ($row = $resultado->fetch()) {
    array_push($ids, $row[0]);
  }
  return $ids;
}


function removeTheme($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from theme where themeId = '{$id}'";

  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "remove-theme-success";
  } else {
    $conn->rollback();
    $status = "remove-theme-failure";
  }
  return $status;
}
