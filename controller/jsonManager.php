<?php
require('./config/urls.php');
require(MODEL_DIRECTORY . "/include/categories.php");
require(MODEL_DIRECTORY . "/include/states.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['request'])) {
    switch ($_POST['request']) {
      case ("states"):
        getStates();
        break;
      case ("categories"):
        getCategoriesJSON(0);
        break;
      case ("ambits"):
        getAmbitsJSON(0);
        break;
      default:
        break;
    }
  }
}
