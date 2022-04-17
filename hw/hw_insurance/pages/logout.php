<?php
 session_start();
 if (isset($_SESSION['login'], $_SESSION['login'])) {
    $login = "";
    $password = "";
}
header('location:../index.php');
session_destroy();
?>