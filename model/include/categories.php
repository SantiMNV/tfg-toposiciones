<?php
require("pdo_connection.php");

function getCategories($count) {
  global $conn;
  $result = array();
  $sql = "SELECT opposition_category.category_name,opposition_category.categoryId  FROM opposition_category order by opposition_category.category_name desc";
  foreach ($conn->query($sql) as $row) {
    /*array_push($result, $row['categoryId'], $row["category_name"]);*/
    $result[$row['categoryId']] = $row["category_name"];
  }
  echo json_encode($result);
}
