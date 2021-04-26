<?php
require("pdo_connection.php");

function getThemes() {
  global $conn;
  $sql = "SELECT theme.themeId,theme.theme_name,LEFT(theme.content,200) as content,theme.theme_category,user.user_name FROM theme,user,opposition_category where theme.theme_category = opposition_category.categoryId and theme.userId = user.userId order by theme.created_at desc";
  $resultado = $conn->query($sql);
  return $resultado;
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
  $ok = true;
  $conn->beginTransaction();
  $sql = "INSERT into theme values(null,'{$post['input-theme-name']}',{$post['input-theme-category']},'{$post['input-theme-content']}','{$_SESSION['login_userId']}',now())";

  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "add-theme-success";
  } else {
    $conn->rollback();
    $status = "add-theme-failure";
  }
  return $status;
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
