<?php
require("pdo_connection.php");

function getCategoriesJSON($count) {
  global $conn;
  $result = array();
  $sql = "SELECT opposition_category.category_name,opposition_category.categoryId  FROM opposition_category order by opposition_category.category_name desc";
  foreach ($conn->query($sql) as $row) {
    /*array_push($result, $row['categoryId'], $row["category_name"]);*/
    $result[$row['categoryId']] = $row["category_name"];
  }
  echo json_encode($result);
}

function getCategories() {
  global $conn;
  $sql = "SELECT opposition_category.categoryId,opposition_category.category_name,opposition_category.category_name,opposition_ambit.ambit_name,
  LEFT(opposition_category.recommended_material,16) as material,
  (select count(opposition.oppositionId) from opposition where opposition.categoryId = opposition_category.categoryId) as opposition_count,
  opposition_ambit.created_at
  FROM opposition_category, opposition_ambit where opposition_category.ambitId = opposition_ambit.ambitId";
  $result = $conn->query($sql);
  return $result;
}

function removeCategory($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from opposition_category where categoryId = '{$id}'";
  try{
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "remove-category-success";
    } else {
      $conn->rollback();
      $status = "remove-category-failure";
    }
  }catch (Exception $e) {
    $status = "remove-category-failure";
  }
  
  return $status;
}

function addCategory($post) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $category_name = $post['input-category-name'] ?? "";
  $category_material = $post['input-category-material'] ?? "";
  $category_ambit = $post['input-category-ambit'] ?? "";
  $status = "nei";
  if(!empty($category_name) && !empty($category_material) && !empty($category_ambit)){
    $conn->beginTransaction();
    $sql = "SELECT categoryId from opposition_category where category_name LIKE '{$post['input-category-name']}'";
    $result = $conn->query($sql)->fetch();
    if ($result) {
      $status = "add-category-failure-alreadyexists";
    } else {
      $sql = "INSERT into opposition_category values(null,'{$post['input-category-name']}','','{$post['input-category-material']}',{$post['input-category-ambit']},now(),now())";

      if ($conn->exec($sql) == 0) $ok = false;
      if ($ok) {
        $conn->commit();
        $status = "add-category-success";
      } else {
        $conn->rollback();
        $status = "add-category-failure";
      }
    }
  }

  return $status;
}
