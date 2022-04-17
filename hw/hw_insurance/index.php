<?php
include "index_session.php";
?>


<html>

<head>
    <title>Круизы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./css/kruis.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="main">
        <header>
            <img src="img/top.jpg" width="769" height="127" /><br>

        </header>

        <section>
            <aside>
                <ul>
                    <li>
                        <img id='about' src="img/menu_01.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="index.php" class="over">ГЛАВНАЯ </a>
                    </li>
                    <li>
                        <img id='price' src="img/menu_02.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="#">Цены</a>
                    </li>
                    <li>
                        <img id='services' src="img/menu_03.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="./pages/order.php">Заказ</a>
                    </li>
                    <li>
                        <img id='gallery' src="img/menu_04.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="#">Страхование грузов</a>
                    </li>
                    <li>
                        <img id='where' src="img/menu_05.gif" width="23" height="24" align="absmiddle">&nbsp;&nbsp;&nbsp;
                        <a href="#">Грузовые перевозки</a>
                    </li>
                    <li>
                        <?php
                        if ($login == "admin" && $password == "123") {
                        ?>
                            <div>Вы вошли как админ</div>
                            <form name="auth" method="post" action="pages/logout.php" class="form-auth">
                                <input type="submit" name="submit" value="Разлогиниться">
                            </form>
                        <?php } else { ?>
                            <div class="auth">
                                <font class="title">Авторизация</font><br>
                                <form name="auth" method="post" action="index.php" class="form-auth">
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
                        Лучший отдых на море!<br> <img src="img/line.gif" width="402" height="2" align="right"></h1>

                </header>
                <article>
                    <p>
                        <img src="img/kruiz.jpg" width="184" height="135" align="right">Наша компания предлагает вам богатый выбор различных морских круизов из Санкт-Петербурга. Предлагаемые нами маршруты и расписание морских круизов 2012 разработаны таким образом, чтобы любой человек смог подобрать такой вариант морского круиза, который подошел бы ему по всем параметрам
                    </p>
                </article>
                <article>
                    <p>
                        <img src="img/kruiz2.jpg" width="184" height="135" align="left">Кроме морских круизов из Санкт-Петербурга, маршрут которых пролегает по территориям других стран, с нашей помощью вы сможете отправиться и в разнообразные круизы по России.
                    </p>
                    <p>
                        При этом все предлагаемые нами варианты путешествий – и морские круизы из Петербурга, и речные круизы по Европе, и другие варианты речных и морских круизов отличаются отличным соотношением цена-качество и неизменно высоким уровнем сервиса.</p>
                </article>
            </section>
        </section>
        <footer> Copyright&copy;2012&quot;Морские круизы&quot; </footer>
    </div>
</body>

</html>