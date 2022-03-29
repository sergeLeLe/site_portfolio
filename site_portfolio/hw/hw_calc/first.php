<html>
<head>
	<meta charset="utf-8">
	<title>Calculations</title>
	<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
	<form action="second.php" method="post">
		<div class="container">
			<div class="wrapper1">
				<div class="left-input-div">
					<div class="name">
						<p>Имя</p>
						<input type="text" id="name" name="name">	
					</div>
					<div class="date">
						<p>Дата</p>
						<input type="text" id="date" name="date">	
					</div>
				</div>
				<div class="right-input-div">
					<div class="file">
						<p>Файл</p>
						<select name="file1" id="file1">
	    					<option value="text1">text1.txt</option>
	    					<option value="text2">text2.txt</option>
	    					<option value="text3">text3.txt</option>
	   					</select>
					</div>
				</div>
			</div>
			<div class="wrapper2">
				<div class="left-options-div">
					<p>Ограничения для разности</p>
	 				<input type="checkbox" name="option1" value="option1"> не делится на 3<Br>
	   				<input type="checkbox" name="option2" value="option2"> нечетная<Br> 
				</div>
				<div class="right-options-div">
					<p>Операции</p>
					<div class="radio-options"><input type="radio" name="operation" value="sum"> <div style="padding-top: 7px;margin-left: 5px;">Сумма разностей</div></div>
	    			<div class="radio-options"><input type="radio" name="operation" value="square"> <div style="padding-top: 7px;margin-left: 5px;">Квадрат от максимальной суммы</div></div>
				</div>
			</div>	
			<div class="wrapper3">
				<input type="submit" value="Вычислить" class="button" action=".second.php">
			</div>
		</div>
	</form>
</body>
</html>