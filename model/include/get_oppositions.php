<?php
require("pdo_connection.php");

function getOppositions($count) {
  global $conn;

  $sql = "SELECT opposition.oppositionId,opposition.opposition_status,opposition.seats,opposition_category.category_name,spain_states.provincia as state,opposition.updated_at FROM opposition,spain_states,opposition_category where opposition.stateId = spain_states.stateId and opposition.categoryId = opposition_category.categoryId order by opposition.updated_at desc";
  if ($count) {
    $sql .= " limit " . $count;
  }

  $resultado = $conn->query($sql);
  return $resultado;
}

function getOpposition($id) {
  global $conn;
  $sql = "SELECT opposition.oppositionId,opposition.opposition_status,opposition.seats,opposition.opposition_start_date,opposition.opposition_end_date,opposition.official_link,opposition.opposition_description,opposition_category.category_name,opposition_category.recommended_material,spain_states.provincia as state,opposition_ambit.ambit_name,opposition.updated_at FROM opposition,spain_states,opposition_category,opposition_ambit where opposition.stateId = spain_states.stateId and opposition.categoryId = opposition_category.categoryId and opposition_category.ambitId = opposition_ambit.ambitId and opposition.oppositionId =  " . $id;
  $resultado = $conn->query($sql);
  return $resultado;
}
