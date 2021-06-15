<?php
require("pdo_connection.php");

function registerUser($post) {
  global $conn;
  $register_mail = $post['register-mail'] ?? "";
  $register_password = $post['register-password'] ?? "";
  $register_user = $post['register-user'] ?? "";
  $register_access = $post['register-access'] ?? "";
  $status = "nei";
  if (!empty($register_mail) && !empty($register_password) && !empty($register_user) && !empty($register_access)) {
    $sql = "SELECT user.mail,user.user_password from user where user.mail = '{$register_mail}'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
      $status = "registered";
    } else {

      // *** TRANSACTION ***
      $ok = true;
      $conn->beginTransaction();

      $sql = "INSERT into user values(null,{$register_access}, '{$register_user}', '{$register_mail}','" . hash('sha512', $register_password) . "', now(), now())";
      if ($conn->exec($sql) == 0) $ok = false;
      if ($ok) {
        $conn->commit();
        $status = "register-success";
      } else {
        $conn->rollback();
        $status = "register-failure";
      }
    }
  }
  return $status;
}

function loginUser($post) {
  global $conn;
  $login_mail = $post['login-mail'] ?? "";
  $login_password = $post['login-password'] ?? "";
  $status = "nei";
  if (!empty($login_mail) && !empty($login_password)) {
    $sql = "SELECT user.user_name,user.userId,user.access_level from user where user.mail = '{$login_mail}' and user.user_password = '" . hash('sha512', $login_password) . "'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
      $row = $result->fetch();
      $_SESSION['login_mail'] = $post['login-mail'];
      $_SESSION['login_user'] = $row['user_name'];
      $_SESSION['login_userId'] = $row['userId'];
      $_SESSION['login_access_level'] = $row['access_level'];
      $status = "login-success";
    } else {
      $status = "login-failure";
    }
  }
  return $status;
}

function getUser($id) {
  global $conn;
  $sql = "SELECT user.userId,user.user_name,user.mail,user.access_level from user where user.userId = $id";
  $result = $conn->query($sql);
  return $result->fetch();
}

function editUser($post) {
  global $conn;
  $login_user = $post['login-user'] ?? "";
  $login_mail = $post['login-mail'] ?? "";
  $login_password = $post['login-password'] ?? "";
  $status = "nei";
  if (!empty($login_user) && !empty($login_mail) && !empty($login_password)) {
    $ok = true;
    $status = "edit-failure";

    if (!empty($login_mail)) {
      if (!empty($login_user)) {
        if ($login_user != $_SESSION['login_user']) {
          $sqlUsername = "UPDATE user set user.user_name = '{$login_user}' WHERE mail = '{$login_mail}'";
        }
      }

      if (!empty($login_password)) {
        $sqlPassword = "UPDATE user set user_password = '{hash('sha512', $login_password)}' WHERE mail = '{$login_mail}'";
      }
      $sqlSelect = "SELECT user.user_name from user where user.mail = '{$login_mail}' and user.user_password = '{hash('sha512', $login_password)}'";
      // *** TRANSACTION ***
      $conn->beginTransaction();
      if (isset($sqlUsername)) {
        if ($conn->exec($sqlUsername) == 0) $ok = false;
      }
      if (isset($sqlPassword)) {
        if ($conn->exec($sqlPassword) == 0) $ok = false;
      }
      if (isset($sqlSelect)) {
        if ($conn->exec($sqlSelect) == 0) $ok = false;
      }
      if ($ok) {
        $conn->commit();
        $status = "edit-success";
        $result = $conn->query($sqlSelect);
        if ($result->rowCount() > 0) {
          $_SESSION['login_mail'] = $login_mail;
          $_SESSION['login_user'] = $result->fetch()['user_name'];
        }
      } else {
        $conn->rollback();
        $status = "edit-failure";
      }
    }
  }


  return $status;
}

function editUserFull($post) {
  global $conn;
  // *** TRANSACTION ***
  $edit_user = $post['edit-user'] ?? "";
  $edit_userId = $post['edit-userId'] ?? "";
  $edit_mail = $post['edit-mail'] ?? "";
  $edit_access = $post['edit-access'] ?? "";
  $status = "nei";
  $ok = true;
  if (!empty($edit_user) && !empty($edit_userId) && !empty($edit_mail) && !empty($edit_access)) {
    $conn->beginTransaction();
    $sql = "UPDATE user set user.user_name = '{$edit_user}', user.mail = '{$edit_mail}',
    user.access_level = {$edit_access},user.updated_at = now() where user.userId = '{$edit_userId}' ";
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "edit-success";
    } else {
      $conn->rollback();
      $status = "edit-failure";
    }
  }
  return $status;
}

function getUsers() {
  global $conn;
  // $sql = 'SELECT userId,access_level,user_name,mail,created_at FROM `user` where access_level != 10';
  $sql = 'SELECT userId,access_level,user_name,mail,created_at FROM `user`';
  $result = $conn->query($sql);
  return $result;
}


function removeUser($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from user where userId = '{$id}'";

  if ($conn->exec($sql) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "remove-user-success";
  } else {
    $conn->rollback();
    $status = "remove-user-failure";
  }
  return $status;
}


function sendContact($post) {
  global $conn;
  // *** TRANSACTION ***
  $contact_mail = $post['input-contact-mail'] ?? "";
  $contact_name = $post['input-contact-name'] ?? "";
  $contact_message = $post['input-contact-message'] ?? "";
  $status = "nei";
  if (!empty($contact_mail) && !empty($contact_name) && !empty($contact_message)) {
    $ok = true;
    $conn->beginTransaction();
    $sql = "INSERT into admin_messages values(null,'{$contact_mail}','{$contact_message}',0,now())";
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "send-success";
    } else {
      $conn->rollback();
      $status = "send-failure";
    }
  } else {
    $status = "nei";
  }
  return $status;
}

function sendResetPW($post) {
  global $conn;
  // *** TRANSACTION ***
  $login_mail = $post['login-mail'] ?? "";
  $status = "nei";
  if (!empty($login_mail) && isset($post['reset-btn'])) {
    $ok = true;
    $conn->beginTransaction();
    $sql = "INSERT into admin_messages values(null,'{$login_mail}','Restore password',0,now())";
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "reset-success";
    } else {
      $conn->rollback();
      $status = "reset-failure";
    }
  }
  return $status;
}

function getUsersParams($txtSearch) {
  global $conn;
  $sql = "SELECT * FROM user where user_name like '%" . $txtSearch . "%' or mail like '%" . $txtSearch . "%' ";
  $resultado = $conn->query($sql);
  $ids = array();
  while ($row = $resultado->fetch()) {
    array_push($ids, $row[0]);
  }
  return $ids;
}
