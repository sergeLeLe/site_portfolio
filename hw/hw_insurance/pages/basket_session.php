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

if (isset($_REQUEST["customer"])) {
    $customer = $_REQUEST["customer"];
    $_SESSION['customer'] = $customer;
} else if (isset($_SESSION['customer'])) {
    $customer = $_SESSION['customer'];
} else {
    $customer = "";
}

if (isset($_REQUEST["city"])) {
    $city = $_REQUEST["city"];
    $_SESSION['city'] = $city;
} else if (isset($_SESSION['city'])) {
    $city = $_SESSION['city'];
} else {
    $city = "";
}

if (isset($_REQUEST["email"])) {
    $email = $_REQUEST["email"];
    $_SESSION['email'] = $email;
} else if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    $email = "";
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