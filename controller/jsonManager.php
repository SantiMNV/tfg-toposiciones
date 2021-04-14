<?php
require('./config/urls.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['request'])) {
    switch ($_POST['request']) {
      case ("states"):
        //php_console_log("Quieres las privincias");
        getStates(0);
        break;
      case ("categories"):
        //php_console_log("Quieres las categorias");
        getCategories(0);
        break;
      default:
        break;
    }
  }
}
