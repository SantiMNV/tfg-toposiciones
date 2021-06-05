<?php
require("pdo_connection.php");

function getNotifications() {
  global $conn;
  $sql = 'SELECT notificationText,notificationType FROM admin_notifications order by created_at ASC';
  $result = $conn->query($sql);
  $notifications = array();
  while ($row = $result->fetch()) {
    $notifications[$row[0]] = $row[1];
  }
  return $notifications;
}

function getAllNotifications() {
  global $conn;
  $sql = 'SELECT * FROM admin_notifications order by created_at ASC';
  $result = $conn->query($sql);
  return $result;
}

function addNotification($post) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "INSERT into admin_notifications values(null,'{$post['input-notification-text']}','{$post['input-notification-type']}',now())";
  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "add-notification-success";
  } else {
    $conn->rollback();
    $status = "add-notification-failure";
  }
  return $status;
}

function removeNotification($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from admin_notifications where notificationID = '{$id}'";

  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "remove-notification-success";
  } else {
    $conn->rollback();
    $status = "remove-notification-failure";
  }
  return $status;
}
