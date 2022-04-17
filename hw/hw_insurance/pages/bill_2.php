<?php
include 'bill_2_session.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Круизы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/kruis.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="main">
        <header>
            <img src="../img/top.jpg" width="769" height="127" />
        </header>
        <section>
            <aside>
            <ul>
                    <li>
                        <img id='about' src="../img/menu_01.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="../index.php" class="over">ГЛАВНАЯ </a>
                    </li>
                    <li>
                        <img id='price' src="../img/menu_02.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="#">Цены</a>
                    </li>
                    <li>
                        <img id='services' src="../img/menu_03.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="order.php">Заказ</a>
                    </li>
                    <li>
                        <img id='gallery' src="../img/menu_04.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="#">Страхование грузов</a>
                    </li>
                    <li>
                        <img id='where' src="../img/menu_05.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="#">Грузовые перевозки</a>
                    </li>
                    <li>
                        <?php
                        if ($login == "admin" && $password == "123") {
                        ?>
                            <div>Вы вошли как админ</div>
                            <form name="auth" method="post" action="logout.php" class="form-auth">
                                <input type="submit" name="submit" value="Разлогиниться">
                            </form>
                        <?php } else { ?>
                            <div class="auth">
                                <font class="title">Авторизация</font><br>
                                <form name="auth" method="post" action="../index.php" class="form-auth">
                                    <div class="input-auth">логин <input type="text" name="login"></div>
                                    <div class="input-auth">пароль <input type="password" name="password"></div>
                                    <input type="submit" name="submit" value="Войти">
                                </form>
                            </div>
                        <?php } ?>
                    </li>
                </ul>
            </aside>
            <section>
                <header>
                    <h1>
                    Медстрахование, <?php echo date("d.m.y") ?> <br> <img src="../img/line.gif" width="402" height="2" align="right">
                    </h1>

                </header>

                <?php
                if ($login == "admin" && $password == "123") {
                ?>
                    <form method="POST" action="basket.php">
                        <div>
                            <div>
                                <?php
                                if (isset($_SESSION['insurance'], $_SESSION["hosp"])) {
                                    echo $m[$_SESSION['insurance']][0] . " страховка" . " + лечение " . mb_strtolower($m[$_SESSION['hosp']][0]);
                                }
                                ?>
                            </div>
                            <div style="width: 400px;display: flex;">
                                <div style="margin-right: 10px;">Расширение к страховке:</div>
                                <div>
                                <?php
                                    $string = "";

                                    if (isset($_SESSION['st'])) {
                                        $string .= $m[$_SESSION['st']][0] . "<br>";
                                    }

                                    if (isset($_SESSION['kosm'])) {
                                        $string .= $m[$_SESSION['kosm']][0] . "<br>";
                                    }

                                    if (isset($_SESSION['diet'])) {
                                        $string .= $m[$_SESSION['diet']][0] . "<br>";
                                    }

                                    echo $string;
                                    ?>
                                </div>
                            </div>
                            <div>
                                <?php
                                $count_adult = 0;
                                $count_child = 0;
                                if (isset($_SESSION['firstMember'])) {
                                    if ($_SESSION['firstMember'][0] == 8) {
                                        $count_adult += 1;
                                    } else {
                                        $count_child += 1;
                                    }
                                }

                                if (isset($_SESSION['secondMember'])) {
                                    if ($_SESSION['secondMember'][0] == 8) {
                                        $count_adult += 1;
                                    } else {
                                        $count_child += 1;
                                    }
                                }

                                if (isset($_SESSION['thirdMember'])) {
                                    if ($_SESSION['thirdMember'][0] == 8) {
                                        $count_adult += 1;
                                    } else {
                                        $count_child += 1;
                                    }
                                }

                                echo $count_adult . " взрослых + " . $count_child . " ребенок";
                                ?>
                            </div>
                            <div>Общая стоимость: <?php echo $_SESSION["res"]; ?></div>
                            <div>
                                Заказчик полиса страхования: 
                                <input type="text" name="customer" value="<?php echo $_SESSION["firstMember"][1] ?>">
                            </div>
                            <h4>Выберите город доставки полиса страхования</h4>
                            <div>
                                <div>
                                    <select name="city">
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Нижний Новгород</option>
                                        <option>Сочи</option>
                                        <option>Мурманск</option>
                                    </select>
                                </div>
                                <div>
                                    Email: 
                                    <input type="text" name="email">
                                </div>
                            </div>
                            <div>
                                <input value="Вернуться к началу оформления" type="button" onclick="location.href='order.php'"/>
                                <input type="submit" name="done" value="Подтвердить заказ"/>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </section>
        </section>
        <footer> Copyright&copy;2012&quot;Морские круизы&quot; </footer>
    </div>
</body>

</html>