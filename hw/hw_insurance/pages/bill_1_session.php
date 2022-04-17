<?php
session_start();

if (isset($_REQUEST["clear"])) {
    header('location: clear.php');
}

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

if (isset($_REQUEST["insurance"])) {
    $insurance = $_REQUEST["insurance"];
    $_SESSION['insurance'] = $insurance;
} else if (isset($_SESSION['insurance'])) {
    $insurance = $_SESSION['insurance'];
} else {
    $insurance = "";
}

if (isset($_REQUEST["hosp"])) {
    $hosp = $_REQUEST["hosp"];
    $_SESSION['hosp'] = $hosp;
} else if (isset($_SESSION['hosp'])) {
    $hosp = $_SESSION['hosp'];
} else {
    $hosp = "";
}

if (isset($_REQUEST["st"])) {
    $st = $_REQUEST["st"];
    $_SESSION['st'] = $st;
} else if (isset($_SESSION['st'])) {
    $st = $_SESSION['st'];
} else {
    $st = "";
}

if (isset($_REQUEST["kosm"])) {
    $kosm = $_REQUEST["kosm"];
    $_SESSION['kosm'] = $kosm;
} else if (isset($_SESSION['kosm'])) {
    $kosm = $_SESSION['kosm'];
} else {
    $kosm = "";
}

if (isset($_REQUEST["diet"])) {
    $diet = $_REQUEST["diet"];
    $_SESSION['diet'] = $diet;
} else if (isset($_SESSION['diet'])) {
    $diet = $_SESSION['diet'];
} else {
    $diet = "";
}

if (isset($_REQUEST["firstMember"], $_REQUEST["name1"])) {
    $firstMember = array(0 => $_REQUEST["firstMember"], 1 => $_REQUEST["name1"]);
    $_SESSION['firstMember'] = $firstMember;
} else if (isset($_SESSION['firstMember'], $_SESSION['name1'])) {
    $firstMember = $_SESSION['firstMember'];
    $name1 = $_SESSION['name1'];
} else {
    $firstMember = "";
}

if (isset($_REQUEST["secondMember"])) {
    $secondMember = array(0 => $_REQUEST["secondMember"], 1 => $_REQUEST["name2"]);
    $_SESSION['secondMember'] = $secondMember;
} else if (isset($_SESSION['secondMember'])) {
    $secondMember = $_SESSION['secondMember'];
} else {
    $secondMember = "";
}

if (isset($_REQUEST["thirdMember"])) {
    $thirdMember = array(0 => $_REQUEST["thirdMember"], 1 => $_REQUEST["name3"]);
    $_SESSION['thirdMember'] = $thirdMember;
} else if (isset($_SESSION['thirdMember'])) {
    $thirdMember = $_SESSION['thirdMember'];
} else {
    $thirdMember = "";
}