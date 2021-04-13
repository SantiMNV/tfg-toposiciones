<?php
require("pdo_connection.php");

function registerUser($post) {
  global $conn;
  $sql = "SELECT user.mail,user.user_password from user where user.mail = '{$post['register-mail']}'";
  $result = $conn->query($sql);

  if ($result->rowCount() > 0) {
    $status = "registered";
  } else {
    // *** TRANSACTION ***
    $todo_bien = true;
    $conn->beginTransaction();
    $sql = "INSERT into user values(null, '{$post['register-user']}', '{$post['register-mail']}','" . hash('sha512', $post['register-password']) . "', now(), now())";

    if ($conn->exec($sql) == 0) $todo_bien = false;
    if ($todo_bien == true) {
      $conn->commit();
      $status = "register-success";
    } else {
      $conn->rollback();
      $status = "register-failure";
    }
  }
  return $status;
}

function loginUser($post) {
  global $conn;
  $sql = "SELECT user.user_name,user.userId,user.access_level from user where user.mail = '{$post['login-mail']}' and user.user_password = '" . hash('sha512', $post['login-password']) . "'";
  $result = $conn->query($sql);

  if ($result->rowCount() > 0) {
    $row = $result->fetch();
    $status = "login-success";
    $_SESSION['login_mail'] = $post['login-mail'];
    $_SESSION['login_user'] = $row['user_name'];
    $_SESSION['login_userId'] = $row['userId'];
    $_SESSION['login_access_level'] = $row['access_level'];
  } else {
    $status = "login-failure";
  }
  return $status;
}

function editUser($post) {
  global $conn;
  $ok = true;

  if (isset($post['login-user']) || isset($post['login-password'])) {
    if (isset($post['login-user'])) {
      if ($post['login-user'] != $_SESSION['login_user']) {
        $sqlUsername = "UPDATE user set user.user_name = '{$post['login-user']}' WHERE mail = '{$post['login-mail']}'";
      }
    }
    if (isset($post['login-password'])) {
      if ($post['login-password'] != "") {
        $sqlPassword = "UPDATE user set user_password = '" . hash('sha512', $post['login-password']) . "' WHERE mail = '{$post['login-mail']}'";
      }
    }
  }

  // *** TRANSACTION ***
  $conn->beginTransaction();
  if (isset($sqlUsername)) {
    if ($conn->exec($sqlUsername) == 0) $ok = false;
  }
  if (isset($sqlPassword)) {
    if ($conn->exec($sqlPassword) == 0) $ok = false;
  }

  if ($ok) {
    $conn->commit();
    $status = "edit-success";
  } else {
    $conn->rollback();
    $status = "edit-failure";
  }

  $sql = "SELECT user.user_name from user where user.mail = '{$post['login-mail']}' and user.user_password = '" . hash('sha512', $post['login-password']) . "'";
  $result = $conn->query($sql);

  if ($result->rowCount() > 0) {
    $_SESSION['login_mail'] = $post['login-mail'];
    $_SESSION['login_user'] = $result->fetch()['user_name'];
  } else {
    //$status = "login-failure";
  }


  return $status;
}
