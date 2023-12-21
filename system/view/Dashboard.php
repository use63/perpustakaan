<?php
session_start();

function addTrue() {
    if($_SESSION['addbook'] == true || $_SESSION['addpenulis'] == true ) {
        echo "<script>let addTrue = true; </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageActive; ?></title>
    <link rel="icon" href="/public/img/library.png" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="/public/css/dashboard.css">
</head>
<body>
    
<div class="container-fluid dash">
    <?php require_once "./system/components/navbar-admin.php"; ?>
    <?php require_once "./system/components/dash-main-admin.php"; ?>
</div>

<?php
addTrue(); 
unset($_SESSION['addbook']);
unset($_SESSION['addpenulis']);
?>
<script src="/public/js/navbar.js"></script>
<script src="/public/js/dash-main.js"></script>
</body>
</html>