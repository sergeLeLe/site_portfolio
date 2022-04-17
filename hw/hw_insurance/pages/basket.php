<?php
include 'basket_session.php';
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
                    <div>
                        <div>
                            <?php
                            echo $customer . ", ";
                            ?>
                        </div>
                        <div>
                            Вам оформлен полис для следующих людей:
                            <?php
                                $string = "";

                                if (isset($_SESSION['firstMember'])) {
                                    $string .= "<br>" . $firstMember[1];
                                }

                                if (isset($_SESSION['secondMember'])) {
                                    $string .= "<br>" . $secondMember[1];
                                }

                                if (isset($_SESSION['thirdMember'])) {
                                    $string .= "<br>" . $thirdMember[1];
                                }

                                echo $string . ".";
                            ?>
                        </div>
                        <div>
                            Вам выставлен счет на <?php echo $res ?>
                        </div>
                        <div>
                            Данные направлены на почту и записаны в файл.
                            <?php
                            function send_mail($email, $msg)
                            {
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $headers = "From:" . $email;
                                return mail($email, "Медстрахование", $msg, $headers);
                            }
        
                            function write($msg)
                            {
                                try {
                                    $handler = fopen("order.txt", "w");
                                    fwrite($handler, $msg);
                                    fclose($handler);
                                    return true;
                                } catch (Exception $e) {
                                    return false;
                                }
                            }
                            $msg = "Итоговая сумма: " . $res;
                            if (isset($_REQUEST["done"])) {
                                if (send_mail($email, $msg) && write($msg)) {
                                    echo "";
                                } else {
                                    echo "Error";
                                }
                            }
                            ?>
                        </div>
                        <div>
                            <br>
                            Полис будет доставлен в г. <?php echo $city ?>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </section>
        <footer> Copyright&copy;2012&quot;Морские круизы&quot; </footer>
    </div>
</body>

</html>