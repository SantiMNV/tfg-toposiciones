<?php
require("pdo_connection.php");

function getPosts($count) {
  global $conn;
  $sql = "SELECT forum_post.postId,user.userId,user.user_name,forum_post.title,LEFT(forum_post.content,120) as content,forum_post.created_at,(SELECT count(forum_message.messageId) from forum_message where forum_message.postId = forum_post.postId) as message_count FROM forum_post,user where user.userId = forum_post.userId order by forum_post.created_at desc";
  if ($count) {
    $sql .= " limit " . $count;
  }
  $result = $conn->query($sql);
  return $result;
}

function getPostsShortId($id) {
  global $conn;
  $sql = "SELECT forum_post.postId,user.userId,user.user_name,forum_post.title,LEFT(forum_post.content,120) as content,forum_post.created_at,(SELECT count(forum_message.messageId) from forum_message where forum_message.postId = forum_post.postId) as message_count FROM forum_post,user where user.userId = forum_post.userId and forum_post.postId = '{$id}' order by forum_post.created_at desc";
  $result = $conn->query($sql);
  return $result;
}

function getPostsParams($txtSearch) {
  global $conn;
  $sql = "SELECT * FROM forum_post where title like '%" . $txtSearch . "%' or content like '%" . $txtSearch . "%' ";
  $resultado = $conn->query($sql);
  $ids = array();
  while ($row = $resultado->fetch()) {
    array_push($ids, $row[0]);
  }
  return $ids;
}

function getPostsSummary($count) {
  global $conn;
  $sql = "SELECT forum_post.postId,user.user_name,forum_post.title,forum_post.created_at FROM forum_post,user where user.userId = forum_post.userId order by forum_post.created_at desc";
  if ($count) {
    $sql .= " limit " . $count;
  }
  $result = $conn->query($sql);
  return $result;
}

function getPost($postId) {
  global $conn;
  $sql = "SELECT forum_post.postId,user.userId,user.user_name,forum_post.title,forum_post.content,forum_post.created_at,(SELECT count(forum_message.messageId) from forum_message where forum_message.postId = forum_post.postId) as message_count FROM forum_post,user where user.userId = forum_post.userId and forum_post.postId = '{$postId}'";
  $result = $conn->query($sql);
  return $result;
}

function getMessages($postId) {
  global $conn;
  $sql = "SELECT forum_message.postId,forum_message.messageId,forum_message.userId,forum_message.content,forum_message.created_at,user.user_name from forum_message,user where forum_message.userId = user.userId and postId = '{$postId}'";
  $result = $conn->query($sql);
  return $result;
}

function addPost($post) {
  global $conn;
  $post_title = $post['input-post-title'] ?? "";
  $post_content = $post['input-post-content'] ?? "";
  $status = "nei";
  if (!empty($post_title) && !empty($post_content)) {
    // *** TRANSACTION ***
    $ok = true;
    $conn->beginTransaction();
    $sql = "INSERT into forum_post values(null,{$_SESSION['login_userId']},'{$post_title}','{$post_content}',now())";
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "add-post-success";
    } else {
      $conn->rollback();
      $status = "add-post-failure";
    }
  }
  return $status;
}

function addMessage($post) {
  global $conn;
  $post_content = $post['input-message-content'] ?? "";
  $post_message = $post['input-message-post'] ?? "";
  $status = "nei";
  if (!empty($post_content) && !empty($post_message)) {
    // *** TRANSACTION ***
    $ok = true;
    $conn->beginTransaction();
    $sql = "INSERT into forum_message values({$post_message},null,{$_SESSION['login_userId']},'{$post_content}',now())";
    if ($conn->exec($sql) == 0) $ok = false;
    if ($ok) {
      $conn->commit();
      $status = "add-message-success";
    } else {
      $conn->rollback();
      $status = "add-message-failure";
    }
  }
  return $status;
}

function removePost($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $sqlSelect = "SELECT count(messageId) from forum_message where postId = {$id}";
  $messageCount = $conn->query($sqlSelect)->fetch()[0];
  $sqlPost = "DELETE from forum_post where postId = {$id}";
  $sqlMessage = "DELETE from forum_message where postId = {$id}";
  $conn->beginTransaction();
  if ($messageCount) {
    if ($conn->exec($sqlMessage) == 0) $ok = false;
  }
  if ($conn->exec($sqlPost) == 0) $ok = false;
  if ($ok) {
    $conn->commit();
    $status = "remove-post-success";
  } else {
    $conn->rollback();
    $status = "remove-post-failure";
  }
  return $status;
}

function removeMessage($id) {
  global $conn;
  // *** TRANSACTION ***
  $ok = true;
  $conn->beginTransaction();
  $sql = "DELETE from forum_message where messageId = {$id}";

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
