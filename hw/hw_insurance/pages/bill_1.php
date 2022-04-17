<?php
include 'bill_1_session.php';
$res = 0;
$arrKoef = array(0 => 0, 1 => 0,2 => 0);

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
                        Проверьте данные страхования<br> <img src="../img/line.gif" width="402" height="2" align="right">
                    </h1>

                </header>

                <?php
                if ($login == "admin" && $password == "123") {
                ?>
                    <form method="POST" action="bill_2.php">
                        <div style="margin-top:6px; margin-left:6px ">
                            <table border="1px solid #7C994A" cellpadding="0" cellspacing="0" border="0" align="center">
                                <tr>
                                    <td>
                                        <div>Тип страхования</div>
                                    </td>
                                    <td colspan="3">
                                        <div>
                                        <?php
                                        if (isset($_SESSION['insurance'])) {
                                            echo $m[$_SESSION['insurance']][0];
                                            $res += $m[$_SESSION['insurance']][1];
                                        }
                                        ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>Возможность госпитализации</div>
                                    </td>
                                    <td colspan="3">
                                        <div>
                                        <?php
                                        if (isset($_SESSION['hosp'])) {
                                            echo $m[$_SESSION['hosp']][0];
                                            $res += $m[$_SESSION['hosp']][1 + $_SESSION["insurance"]];
                                        }
                                        ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>Расширениея к страховке</div>
                                    </td>
                                    <td colspan="3">
                                        <div>
                                        <?php 
                                        $string = "";

                                        if (isset($_SESSION['st'])) {
                                            $res += $m[$_SESSION['st']][1];
                                            $string .= $m[$_SESSION['st']][0] . "<br>";
                                        }

                                        if (isset($_SESSION['kosm'])) {
                                            $res += $m[$_SESSION['kosm']][1];
                                            $string .= $m[$_SESSION['kosm']][0] . "<br>";
                                        }

                                        if (isset($_SESSION['diet'])) {
                                            $res += $m[$_SESSION['diet']][1];
                                            $string .= $m[$_SESSION['diet']][0] . "<br>";
                                        }

                                        echo $string; 
                                        ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>Кто присутствует в страховке</div>
                                    </td>
                                    <td colspan="3">
                                        <div>
                                            <?php
                                            if (isset($_SESSION['firstMember'])) {
                                                $arrKoef[0] = $m[$_SESSION['firstMember'][0]][1];
                                                echo $_SESSION['firstMember'][1] . ", " . $m[$_SESSION['firstMember'][0]][0] . "<br>";
                                            }

                                            if (isset($_SESSION['secondMember'])) {
                                                $arrKoef[1] = $m[$_SESSION['secondMember'][0]][1];
                                                echo $_SESSION['secondMember'][1] . ", " . $m[$_SESSION['secondMember'][0]][0] . "<br>";
                                            }

                                            if (isset($_SESSION['thirdMember'])) {
                                                $arrKoef[2] = $m[$_SESSION['thirdMember'][0]][1];
                                                echo $_SESSION['thirdMember'][1] . ", " . $m[$_SESSION['thirdMember'][0]][0] . "<br>";
                                            }
                                            ?> 
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>Общая стоимость</div>
                                    </td>
                                    <td colspan="4">
                                        <div>
                                        <?php
                                        $res = $arrKoef[0] * $res + $arrKoef[1] * $res + $arrKoef[2] * $res;
                                        echo $res;

                                        $_SESSION["res"] = $res;
                                        ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div>
                                <input value="Назад" type="button" onclick="location.href='order.php'"/>
                                <input type="submit" name="submit" value="Продолжить"/>
                            </div>
                        </div>
                    </form>
                    </td>
                    <td valign="top" height="338" width="49"></td>
                    </tr>
                    </table>
                <?php } ?>


                <article>
                    <p>

                    </p>
                </article>
                <article>
                    <p>

                    </p>
                </article>
            </section>
        </section>
        <footer> Copyright&copy;2012&quot;Морские круизы&quot; </footer>
    </div>
</body>

</html>