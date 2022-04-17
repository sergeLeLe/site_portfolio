<?php
include 'order_session.php';
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
                <form method="POST" action="bill_1.php">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="402">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td valign="top" height="106">
                                            <div ><br>
                                                <div class="up">
                                                    <div style="width: 200px;">
                                                        <h4>Тип страхования</h4>
                                                        <p><input name="insurance" type="radio" value=0 <?php if ($insurance == "0") echo "checked" ?> />
                                                            <?php echo $m[0][0] ?> 
                                                        </p>
                                                        <p><input name="insurance" type="radio" value=1 <?php if ($insurance == "1") echo "checked" ?> />
                                                            <?php echo $m[1][0] ?> 
                                                        </p>
                                                        <p><input name="insurance" type="radio" value=2 <?php if ($insurance == "2") echo "checked" ?> />
                                                            <?php echo $m[2][0] ?> 
                                                        </p>
                                                    </div>
                                                    <div style="margin-left:200px; width: 200px;">
                                                        <h4>Возможность госпитализации</h4>
                                                        <p><input name="hosp" type="radio" value=3 <?php if ($hosp == "3") echo "checked" ?> />
                                                            <?php echo $m[3][0] ?> </p>
                                                        <p><input name="hosp" type="radio" value=4 <?php if ($hosp == "4") echo "checked" ?> />
                                                            <?php echo $m[4][0] ?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="492" valign="top" height="100">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td valign="top" height="100" width="248">
                                                        <div style="margin-top:10px; margin-left:6px ">
                                                            <h4>Дополнительные опции</h4>
                                                            <p><input name="st" type="checkbox" value=5 <?php if ($st == 5) echo "checked" ?> /><?php echo $m[5][0] ?>
                                                            </p>
                                                            <p><input name="kosm" type="checkbox" value=6 <?php if ($kosm == 6) echo "checked" ?> /><?php echo $m[6][0] ?>
                                                            </p>
                                                            <p><input name="diet" type="checkbox" value=7 <?php if ($diet == 7) echo "checked" ?> /><?php echo $m[7][0] ?>
                                                            </p>
                                                        </div>
                                                    </td>                  
                                                </tr>
                                                <tr>
                                                    <td valign="top" height="215" style="width: 800px">
                                                        <h4>Укажите, кто присутствует в страховке</h4>
                                                        <div style="margin-left:22px; margin-top:13px; " class="bottom-table">
                                                            <div class="block">
                                                                <div>1-й человек</div>
                                                                <div>2-й человек</div>
                                                                <div>3-й человек</div>
                                                            </div>
                                                            <div class="block">
                                                                <p><input name="firstMember" type="radio" value=8 <?php if ($firstMember[0] == "8") echo "checked" ?> />
                                                                    <?php echo "Взрослый" ?> </p>
                                                                <p><input name="secondMember" type="radio" value=8 <?php if ($secondMember[0] == "8") echo "checked" ?> />
                                                                    <?php echo "Взрослый" ?> </p>
                                                                <p><input name="thirdMember" type="radio" value=8 <?php if ($thirdMember[0] == "8") echo "checked" ?> />
                                                                    <?php echo "Взрослый" ?> </p>
                                                                </p>
                                                            </div>
                                                            <div class="block">
                                                                <p><input name="firstMember" type="radio" value=9 <?php if ($firstMember[0] == "9") echo "checked" ?> />
                                                                    <?php echo "Ребенок" ?> </p>
                                                                <p><input name="secondMember" type="radio" value=9 <?php if ($secondMember[0] == "9") echo "checked" ?> />
                                                                    <?php echo "Ребенок" ?> </p>
                                                                <p><input name="thirdMember" type="radio" value=9 <?php if ($thirdMember[0] == "9") echo "checked" ?> />
                                                                    <?php echo "Ребенок" ?> </p>
                                                                </p>
                                                            </div>
                                                            <div class="block">
                                                                <input type="text" name="name1" value="<?php echo $_SESSION["firstMember"][1] ?>">
                                                                <input type="text" name="name2" value="<?php echo $_SESSION["secondMember"][1] ?>">
                                                                <input type="text" name="name3" value="<?php echo $_SESSION["thirdMember"][1] ?>">
                                                            </div>
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:9px; ">
                                                            <input type="submit" name="clear" value="Очистить"/>
                                                            <input type="submit" name="submit" value="Далее"/>
                                                        </div>
                                                    </td>                       
                                                </tr>
                                            </table>
                            </td>
                            </tr>
                            </table>
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