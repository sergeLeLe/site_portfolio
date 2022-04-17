<?php
session_start();

$m[0] = array(0 => "Базовая", 1 => 2000);
$m[1] = array(0 => "Комплексная", 1 => 4000);
$m[2] = array(0 => "ВИП", 1 => 8000);
$m[3] = array(0 => "Амбулаторно", 1 => 10, 2 => 30, 3 => 20);
$m[4] = array(0 => "Стационар", 1 => 1000, 2 => 2000, 3 => 4000);
$m[5] = array(0 => "Стоматология", 1 => 3000);
$m[6] = array(0 => "Косметология", 1 => 1000);
$m[7] = array(0 => "Диетология", 1 => 500);
$m[8] = array(0 => "Взрослый", 1 => 1);
$m[9] = array(0 => "Ребенок", 1 => 1.5);
$_SESSION['m'] = $m;

if (isset($_REQUEST["login"], $_REQUEST["password"])) {
    $login = $_REQUEST["login"];
    $_SESSION['login'] = $login;
    $password = $_REQUEST["password"];
    $_SESSION['password'] = $password;
} else if (isset($_SESSION['login'], $_SESSION['login'])) {
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];
} else {
    $login = "";
    $password = "";
}