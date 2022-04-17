<?php
session_start();

if (isset($_SESSION['m'])) {
    $m = $_SESSION['m'];
}

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

if (isset($_SESSION['res'])) {
    $res = $_SESSION['res'];
} else {
    $res = "";
}

if (isset($_SESSION['insurance'])) {
    $insurance = $_SESSION['insurance'];
} else {
    $insurance = "";
}

if (isset($_SESSION['hosp'])) {
    $hosp = $_SESSION['hosp'];
} else {
    $hosp = "";
}

if (isset($_SESSION['st'])) {
    $st = $_SESSION['st'];
} else {
    $st = "";
}

if (isset($_SESSION['kosm'])) {
    $kosm = $_SESSION['kosm'];
} else {
    $kosm = "";
}

if (isset($_SESSION['diet'])) {
    $diet = $_SESSION['diet'];
} else {
    $diet = "";
}

if (isset($_SESSION['firstMember'])) {
    $firstMember = $_SESSION['firstMember'];
} else {
    $firstMember = "";
}

if (isset($_SESSION['secondMember'])) {
    $secondMember = $_SESSION['secondMember'];
} else {
    $secondMember = "";
}

if (isset($_SESSION['thirdMember'])) {
    $thirdMember = $_SESSION['thirdMember'];
} else {
    $thirdMember = "";
}