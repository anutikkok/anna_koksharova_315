<!DOCTYPE HTML>
<html>
<head>


	<title>Telo</title>
</head>

<link rel="stylesheet" type="text/css" href="http://localhost/anna_koksharova/static/css/style.css">

<body>

<?php

$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("kompan");
mysql_set_charset('utf8');

if (!$connection || !$db)
{
    exit(mysql_error());
}

$result = mysql_query("SELECT * FROM tov_tel");

mysql_close();

while($row = mysql_fetch_array($result))
{?>
<h1><?php echo $row['nazvan_tov']; ?></h1>	
<h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
<h3>Страна: <?php  echo $row['strana'];	?></h3>
<p>Цена: <?php  echo $row['cena'];	?> руб.</p>

<hr />

<?php } ?>

<a href="http://localhost/anna_koksharova/index.php">На главную</a>

<p class="kostyl">
			&nbsp
		</p>
		
<footer>
   		&copy; NATURASIBERICA
</footer>

</body>
</html>