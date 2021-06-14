<?php
require("pdo_connection.php");

function getAmbits() {
  global $conn;
  $sql = "SELECT opposition_ambit.ambitId,opposition_ambit.ambit_name,
  (select count(opposition_category.categoryId) from opposition_category where opposition_category.ambitId = opposition_ambit.ambitId ) as category_count,
  (select count(opposition.oppositionId) from opposition,opposition_category where opposition_category.ambitId = opposition_ambit.ambitId and opposition.categoryId = opposition_category.categoryId ) as opposition_count,opposition_ambit.created_at FROM opposition_ambit group by opposition_ambit.ambitId order by created_at desc";
  $result = $conn->query($sql);
  return $result;
}

function getAmbitsJSON() {
  global $conn;
  $result = array();
  $sql = "SELECT opposition_ambit.ambitId,opposition_ambit.ambit_name FROM opposition_ambit order by created_at desc";
  foreach ($conn->query($sql) as $row) {
    $result[$row['ambitId']] = $row["ambit_name"];
  }
  echo json_encode($result);
}

function removeAmbit($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from opposition_ambit where ambitId = '{$id}'";
  try {
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "remove-ambit-success";
    } else {
      $conn->rollback();
      $status = "remove-ambit-failure";
    }
  } catch (Exception $e) {
    $status = "remove-ambit-failure";
  }
  return $status;
}

function addAmbit($post) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $status = "nei";
  if(isset($post['input-ambit-name'])){
    $sql = "SELECT ambitId from opposition_ambit where ambit_name LIKE '{$post['input-ambit-name']}'";
    $result = $conn->query($sql)->fetch();
    if ($result) {
      $status = "add-ambit-failure-alreadyexists";
    } else {
      $sql = "INSERT into opposition_ambit values(null,'{$post['input-ambit-name']}','',now(),now())";

      if ($conn->exec($sql) == 0) $ok = false;
      if ($ok) {
        $conn->commit();
        $status = "add-ambit-success";
      } else {
        $conn->rollback();
        $status = "add-ambit-failure";
      }
    }
  }

  return $status;
}
