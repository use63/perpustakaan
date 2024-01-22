<?php

$basePATH = "/perpustakaan";

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($route, $basePATH) === 0) {
  $route = substr($route, strlen($basePATH));
}

$route = "/" . trim($route, "/");

if ($route === "/" || $route === "?i=1") {
  $route = "/";
}


$pages = [
  "/" => "Home",
  "/login" => "Login",
  "/dashboard" => "Dashboard",
  "/auth" => "Auth",
  "/logout" => "Logout",
  "/api" => "Api",
  "/addbook" => "AddBook",
  "/addpenulis" => "AddPenulis"
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
    break;
  case 'Api':
    require_once "api.php";
    break;
  case 'AddBook':
    require_once "_addBook.php";
    break;
  case 'AddPenulis':
    require_once "_addPenulis.php";
    break;
  case 'Logout':
      require_once "_logout.php";
      break;
  default:
    require_once "view/404.php";
    break;
}

