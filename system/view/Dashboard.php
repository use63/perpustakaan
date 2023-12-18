<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageActive; ?></title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="/public/css/dashboard.css">
</head>
<body>
    
<div class="container-fluid">
    <?php require_once "./system/components/navbar-admin.php"; ?>
    <?php require_once "./system/components/dash-main-admin.php"; ?>
</div>

<script src="/public/js/navbar.js"></script>
<script src="/public/js/dash-main.js"></script>
</body>
</html>