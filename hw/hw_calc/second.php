<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculations</title>
	<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="second">
<?php

$file = $_POST["file1"];
$option1 = (isset($_POST["option1"])) ? $_POST["option1"] : NULL;
$option2 = (isset($_POST["option2"])) ? $_POST["option2"] : NULL;
$operation = $_POST["operation"];

$post_content = trim(file_get_contents("assets/" . $file . ".txt"));
$lines = explode("\n", $post_content);

$sum_divs = 0;
$max_div = 0;

foreach ($lines as $key=>$val)
{
    if (!$val) {
        continue;
    }

    $values = explode(" ", trim($val));
    $first = (int) $values[0];
    $second = (int) end($values);

    $div = $first - $second;
    $do = FALSE;

    if ($option1 != NULL && $option2 != NULL){
        if ($div % 3 != 0 && $div % 2 == 1){
            $do = TRUE;
        }
    }
    else if ($option1 != NULL){
        if ($div % 3 != 0){
            $do = TRUE;
        }
    }
    else if ($option2 != NULL){
        if ($div % 2 == 1){
            $do = TRUE;
        }
    }
    else {
        $do = TRUE;
    }
    

    if ($do){
        $sum_divs += $div;

        if ($div > $max_div){
            $max_div = $div;
        }
    }
}

?>

<table border="1" width="300px" height="200px">
<tr>
<td>Имя</td>
<td><?php echo($_POST["name"]) ?></td>
</tr>
<tr>
<td>Дата</td>
<td> <?php echo($_POST["date"]) ?> </td>
</tr>
<tr>
<td>Файл</td>
<td><?php echo($file . ".txt") ?></td>
</tr>
<tr>
<td>Ограничения</td>
<td>
    <?php
        if ($option1){
            echo("не делится на 3<br>");
        }

        if ($option2){
            echo("не четная");
        }

        if (!$option1 && !$option2){
            echo("нет");
        }
    ?>
</td>
</tr>
<tr>
<td>Операции</td>
<td>
    <?php
        if ($operation == "sum"){
            echo("Сумма разностей");
        }
        else if ($operation == "square"){
            echo("Квадрат от максимальной суммы");
        }
    ?>
</td>
</tr>
<tr bgcolor="#FFFF00">
<td align="center"><b>Результат</b></td>
<td align="center"><b>
    <?php 
    if ($operation == "sum"){
        echo($sum_divs);
    }
    else if ($operation == "square"){
        echo(pow($max_div, 2));
    }
    ?>
</b></td>
</tr>
</table>
</div>
</body>
</html>