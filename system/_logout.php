<?php

session_start();
unset($_SESSION['role']);
header('Location: /login');

?>