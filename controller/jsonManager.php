<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/categories.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['request'])) {
    switch ($_POST['request']) {
      case ("states"):
        getStates(0);
        break;
      case ("categories"):
        getCategories(0);
        break;
      default:
        break;
    }
  }
}
