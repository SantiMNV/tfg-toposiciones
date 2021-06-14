<?php
require("pdo_connection.php");

function getCarroussel() {
  global $conn;
  $sql = 'SELECT slideId,imagePath,imageLink,title,subtitle,slideOrder,created_at FROM carroussel order by slideOrder ASC';
  $result = $conn->query($sql);
  return $result;
}

function addSlide($post) {
  global $conn;
  $status = "";

  $img_dir = MAIN_DIRECTORY . "/view/media/images/";
  $img_filename = basename($_FILES["input-carroussel-image"]["name"]);
  $img_full_path = $img_dir . $img_filename;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($img_full_path, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (getimagesize($_FILES["input-carroussel-image"]["tmp_name"]) == false) {
    $status = "add-carroussel-failure-notimage";
    $uploadOk = 0;
  } else {
    if (file_exists($img_full_path)) {
      $status = "add-carroussel-failure-fileexists";
      $uploadOk = 0;
    } else {
      if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
      ) {
        $status = "add-carroussel-failure-unsupportedfiletype";
        $uploadOk = 0;
      }
    }
  }


  if ($uploadOk) {
    // *** TRANSACTION ***
    $link = $post['input-carroussel-link'] ?? "";
    $title = $post['input-carroussel-title'] ?? "";
    $subtitle = $post['input-carroussel-subtitle'] ?? "";
    $order = $post['input-carroussel-order'] ?? 100;
    $status = "nei";
    if (!empty($link) && !empty($title) && !empty($subtitle) && !empty($order)) {
      $ok = true;
      $conn->beginTransaction();
      $sql = "INSERT into carroussel values(null,'images/{$img_filename}','{$link}','{$title}','{$subtitle}',{$order},now())";
      if ($conn->exec($sql) == 0) $ok = false;
      if (!move_uploaded_file($_FILES["input-carroussel-image"]["tmp_name"], $img_full_path)) {
        $ok = false;
      }
      if ($ok) {
        $conn->commit();
        $status = "add-carroussel-success";
      } else {
        $conn->rollback();
        $status = "add-carroussel-failure";
      }
    }
  }
  return $status;
}


function removeSlide($id) {
  global $conn;
  $sql = "SELECT imagePath FROM carroussel where slideId = '{$id}'";
  $result = $conn->query($sql);
  $imagePath = $result->fetchColumn();
  $imagePath = MAIN_DIRECTORY . "/view/media/" . $imagePath;

  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from carroussel where slideId = {$id}";

  if ($conn->exec($sql) == 0) $ok = false;
  if (!unlink($imagePath)) {
    $ok = false;
  }
  if ($ok) {
    $conn->commit();
    $status = "remove-carroussel-success";
  } else {
    $conn->rollback();
    $status = "remove-carroussel-failure";
  }
  return $status;
}


function moveSlide($id, $where) {
  global $conn;
  $ok = true;
  $ordering = "ASC";
  $newPos = -1;
  if ($where == "down") {
    $ordering = "DESC";
    $newPos = +1;
  }

  $sql_select = "SELECT slideId FROM `carroussel` order by slideOrder {$ordering} limit 1";
  $limitId = $conn->query($sql_select)->fetch()[0];

  # check if is at the limit
  if ($limitId == $id) {
    $status = "move-failure-already-in-position";
  } else {
    $sql_select = "SELECT slideOrder FROM `carroussel` where slideId = {$id}";
    $currOrder = $conn->query($sql_select)->fetch()[0];

    $newOrder = $newPos + $currOrder;
    $sql_select = "SELECT slideId FROM `carroussel` where slideOrder = {$newOrder} limit 1";
    $lastId = $conn->query($sql_select)->fetch()[0];

    // *** TRANSACTION ***
    $conn->beginTransaction();
    $sql_curr = "UPDATE carroussel set slideOrder = {$newOrder} where slideId = {$id}";
    $sql_last = "UPDATE carroussel set slideOrder = {$currOrder} where slideId = {$lastId}";

    if ($conn->exec($sql_curr) == 0) $ok = false;
    if ($conn->exec($sql_last) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "move-success";
    } else {
      $conn->rollback();
      $status = "move-failure";
    }
  }
  return $status;
}
