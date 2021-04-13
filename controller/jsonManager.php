<?php
require('./config/urls.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['request'])) {
    switch ($_POST['request']) {
      case ("states"):
        //echo ("Quieres las provincias");
        //php_console_log("Quieres las privincias");
        getStates(0);
        break;
      case ("categories"):
        getCategories(0);
        php_console_log("Quieres las categorias");
        break;
      default:
        break;
    }
  }
}
