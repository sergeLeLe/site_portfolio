<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="main">
    <div class="left-div">
        <div class="upper-text">Заказ на поездку<br>Количество людей</div>
        <form method="POST" action="">
            <div class="field">
                <label for="n">Дети</label>
                <input type="text" id="n" name="childrens" value="<?php echo $_POST["childrens"] ?>"/>
            </div>
            <div class="field">
                <label for="ln">Взрослые</label>
                <input type="text" id="ln" name="adults" value="<?php echo $_POST["adults"] ?>"/>
            </div>
            <div class="field">
                <label for="a">Дата</label>
                <input type="text" id="a" name="date" value="<?php echo $_POST["date"] ?>"/>
            </div>
            <input type="submit" value="Оформить" id="btn" name="submit">
        </form>
        <div class="lower-text">Примечание:<br><br>Большой автобус 50 мест<br>Микрооавтобус 30 мест<br><br>В каждом автобусе не менее двух взрослых</div>
        
    </div>
    
    <div class="right-div">
        <div class="inner-div">
            <?php
            $childrens = 0;
            $adults = 0;
            $date = "";

            $bBus = 50;
            $sBus = 30;
            $min_adults = 2;

            if (isset($_POST["submit"])&&!empty($_POST["childrens"])&&!empty($_POST["adults"])&&!empty($_POST["date"])) {
                $childrens = (int) $_POST["childrens"];
                $adults = (int) $_POST["adults"];
                $date = $_POST["date"];
                
                echo "<div class='result'>Заказ на $date<br><br></div>";

                $allHumans = $childrens + $adults;
                $bCount = intdiv($allHumans, $bBus) + (($allHumans % $bBus != 0) ? 1 : 0);
                $sCount = intdiv($allHumans, $sBus) + (($allHumans % $sBus != 0) ? 1 : 0);
                [$countBus, $type_bus] = ($bCount < $sCount ? [$bCount, "большой автобус"] : [$sCount, "микроавтобус"]);
                if (intdiv($adults, $min_adults) >= $countBus) {
                    for ($i = 1; $i <= $countBus ; $i++) {
                        $countChilds = intdiv($childrens, $countBus);
                        $countAdults = intdiv($adults, $countBus);
                        if ($i == $countBus){
                            $countChilds += $childrens % $i;
                            $countAdults += $adults % $i;
                        }
                        echo "<div class='result'>$i $type_bus:<br>детей - $countChilds<br>взрослых - $countAdults</div>";
                    }
                } else {
                    echo "<div class='result'>Заказ невозможен. Недостаточно взрослых.</div>";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>