<?php
require("pdo_connection.php");

function updateRead($id, $readed) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "UPDATE admin_messages set readed = ";
  if ($readed) {
    $sql .= 0;
  } else {
    $sql .= 1;
  }
  $sql .= " where messageId = {$id}";

  if (
    $conn->exec($sql) == 0
  ) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "update-read-success";
  } else {
    $conn->rollback();
    $status = "update-read-failure";
  }
  return $status;
}

function changePassword($messageId, $mail) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $sqlSelect = "SELECT userId from user where mail = '{$mail}'";
  $result = $conn->query($sqlSelect);
  $userId = $result->fetchColumn();
  if ($userId > 0) {
    $conn->beginTransaction();
    $newPass = randomPassword();
    $sqlUpdate = "UPDATE user set user_password = '" . hash('sha512', $newPass) . "' where userId = {$userId}";
    if ($conn->exec($sqlUpdate) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "update-pw-success-" . $newPass;
    } else {
      $conn->rollback();
      $status = "update-pw-failure";
    }
  } else {
    $status = "user-not-found";
  }
  return $status;
}

function randomPassword() {
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890;%';
  $pass = array(); 
  $alphaLength = strlen($alphabet) - 1; 
  for ($i = 0; $i < 20; $i++) {
    $n = rand(0, $alphaLength);
    $pass[] = $alphabet[$n];
  }
  // Array to string
  return implode($pass); 
}

function getAdminMessages() {
  global $conn;
  $sql = 'SELECT * FROM admin_messages order by readed ASC';
  $result = $conn->query($sql);
  return $result;
}

function resetPasswordMail() {
  $to = "snaranjov01@educantabria.es";
  $subject = "My subject";
  $txt = "Hello world!";
  $headers = "From: santimnv27@gmail.com" . "\r\n";
  mail($to, $subject, $txt, $headers);
}

function removeAdminMessage($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from admin_messages where messageId = '{$id}'";

  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "remove-message-success";
  } else {
    $conn->rollback();
    $status = "remove-message-failure";
  }
  return $status;
}

