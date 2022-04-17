<?php
session_start();

if (isset($_SESSION['m'])) {
    $m = $_SESSION['m'];
}

if (isset($_SESSION['login'], $_SESSION['login'])) {
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];
} else {
    $login = "";
    $password = "";
}
session_destroy();

session_start();

$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
$_SESSION['m'] = $m;

header('location: order.php');