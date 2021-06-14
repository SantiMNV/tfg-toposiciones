<?php
require("pdo_connection.php");

function getOppositions($count) {
  global $conn;
  $sql = "SELECT opposition.oppositionId,opposition.opposition_status,opposition.seats,opposition_category.category_name,spain_states.provincia  as state,opposition.opposition_start_date,opposition.opposition_end_date,opposition.official_link,opposition.updated_at FROM opposition,spain_states,opposition_category where opposition.stateId = spain_states.stateId and opposition.categoryId = opposition_category.categoryId order by opposition.updated_at desc";
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

function getOppositionParams($post) {
  global $conn;

  $sql = "SELECT opposition.oppositionId,opposition.opposition_status,opposition.seats,opposition.opposition_start_date,opposition.opposition_end_date,opposition.official_link,opposition.opposition_description,opposition_category.category_name,opposition_category.recommended_material,spain_states.provincia as state,opposition_ambit.ambit_name,opposition.updated_at FROM opposition,spain_states,opposition_category,opposition_ambit where opposition.stateId = spain_states.stateId and opposition.categoryId = opposition_category.categoryId and opposition_category.ambitId = opposition_ambit.ambitId   ";
  if (
    isset($post["sendStatus"]) || isset($post["sendDate"]) || isset($post["sendCategory"]) ||
    isset($post["sendState"])
  ) {
    if (isset($post["sendStatus"])) {
      if ($post["sendStatus"] !== "any") {
        if ($post["sendStatus"] === "open") {
          $sql .= " and opposition.opposition_status LIKE 'Abierta'";
        } else {
          $sql .= " and opposition.opposition_status LIKE 'Cerrada'";
        }
      }
    }
    if (isset($post["sendDate"])) {
      if ($post["sendDate"] !== "") {
        $sql .= " and opposition.opposition_start_date > '" . $post["sendDate"] . "'";
      }
    }
    if (isset($post["sendCategory"])) {
      if ($post["sendCategory"] !== "any") {
        $sql .= " and opposition.categoryId LIKE '" . $post["sendCategory"] . "'";
      }
    }
    if (isset($post["sendState"])) {
      if ($post["sendState"] > 0) {
        $sql .= "and opposition.stateId LIKE '" . $post["sendState"] . "'";
      }
    }
    $resultado = $conn->query($sql);
  }

  return $resultado;
}

function getOppositionsList() {
  global $conn;
  $sql = "SELECT opposition.oppositionId,opposition.opposition_status,opposition.seats,opposition_category.category_name,spain_states.provincia  as state,opposition.opposition_start_date,opposition.opposition_end_date,LEFT(opposition.official_link,20) as official_link,opposition.updated_at FROM opposition,spain_states,opposition_category where opposition.stateId = spain_states.stateId and opposition.categoryId = opposition_category.categoryId order by opposition.updated_at desc";

  $resultado = $conn->query($sql);
  return $resultado;
}

function addOpposition($post) {
  global $conn;
  $opposition_status = $post['input-opposition-status'] ?? "";
  $opposition_seats = $post['input-opposition-seats'] ?? "";
  $opposition_link = $post['input-opposition-link'] ?? "";
  $opposition_state = $post['input-opposition-state'] ?? "";
  $opposition_category = $post['input-opposition-category'] ?? "";
  $opposition_start = $post['input-opposition-start'] ?? "";
  $opposition_end = $post['input-opposition-end'] ?? "";
  $status = "nei";
  if (!empty($opposition_status) && !empty($opposition_seats) && !empty($opposition_link) && !empty($opposition_state) && !empty($opposition_category) && !empty($opposition_start) && !empty($opposition_end)) {
    // *** TRANSACTION ***
    $ok = true;
    $conn->beginTransaction();
    $sql = "INSERT into opposition values(null,'{$opposition_status}',{$opposition_seats},'{$opposition_link}',{$opposition_state},{$opposition_category},null,'{$opposition_start}','{$opposition_end}',now(),now())";
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "add-opposition-success";
    } else {
      $conn->rollback();
      $status = "add-opposition-failure";
    }
  }

  return $status;
}

function removeOpposition($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from opposition where oppositionId = '{$id}'";

  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "remove-opposition-success";
  } else {
    $conn->rollback();
    $status = "remove-opposition-failure";
  }
  return $status;
}

function getLastOppositionId() {
  global $conn;
  $sql = "SELECT oppositionId FROM opposition order by oppositionId desc LIMIT 1";
  $result = $conn->query($sql);
  $r = $result->fetch()['oppositionId'];
  return $r;
}
