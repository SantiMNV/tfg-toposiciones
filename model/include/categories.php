<?php
require("pdo_connection.php");
getCategories(0);

function getCategories($count) {
  global $conn;
  $result = array();
  $sql = "SELECT opposition_category.category_name,opposition_category.categoryId  FROM opposition_category order by opposition_category.category_name desc";
  foreach ($conn->query($sql) as $row) {
    /*array_push($result, $row['categoryId'], $row["category_name"]);*/
    $result[$row['categoryId']] =    $row["category_name"];
  }


  echo json_encode($result);

  /*return $result;*/
}

function getOpposition($id) {
  global $conn;
  $sql = "SELECT opposition.oppositionId,opposition.opposition_status,opposition.seats,opposition.opposition_start_date,opposition.opposition_end_date,opposition.official_link,opposition.opposition_description,opposition_category.category_name,opposition_category.recommended_material,spain_states.provincia as state,opposition_ambit.ambit_name,opposition.updated_at FROM opposition,spain_states,opposition_category,opposition_ambit where opposition.stateId = spain_states.stateId and opposition.categoryId = opposition_category.categoryId and opposition_category.ambitId = opposition_ambit.ambitId and opposition.oppositionId =  " . $id;
  $resultado = $conn->query($sql);
  return $resultado;
}
