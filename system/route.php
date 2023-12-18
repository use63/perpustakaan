<?php

$route = $_SERVER['REQUEST_URI'];
$pages = [
  "/" => "Home",
  "/login" => "Login",
  "/auth" => "Auth",
  "/dashboard" => "Dashboard"
  ];
  
$pageActive = false;
foreach ($pages as $key => $val) {
  if(strtolower($key) == strtolower($route)) {
    $pageActive = $val;
    break;
  }
}

switch($pageActive) {
  case 'Home':
    require_once "view/Home.php";
    break;
  case 'Login':
    require_once "view/Login.php";
    break;
  case 'Dashboard':
    require_once "view/Dashboard.php";
    break;
  case 'Auth':
    require_once "_auth.php";
  default:
    require_once "view/404.php";
    break;
}