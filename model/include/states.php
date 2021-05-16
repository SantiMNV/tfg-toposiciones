<?php
require("pdo_connection.php");

function getStates($count) {
  global $conn;
  $result = array();
  $sql = "SELECT * FROM spain_states";
  foreach ($conn->query($sql) as $row) {
    /*array_push($result, $row['categoryId'], $row["category_name"]);*/
    $result[$row['stateId']] =    $row["provincia"];
  }
  echo json_encode($result);
}
