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
