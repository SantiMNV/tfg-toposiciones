<?php

require('./config/urls.php');
global $smarty;
$page = new Page("","Inicio", "Titulo", "slug", "");

/*
$alerts = array(
  "<strong>¡Cuidado!</strong> Este es un mensaje" => "alert-info",
  "Peligro!" => "alert-danger",
  "Modo oscuro " => "alert-dark"
);*/
$alerts = array();
$smarty->assign('alerts', $alerts);
$smarty->assign('page', $page);
$smarty->assign('nombre', "Juan");

$smarty->display('main_layout.html');
