<!DOCTYPE HTML>
<html>
<head>
	<title>Contacts</title>
</head>

<link rel="stylesheet" type="text/css" href="static/css/style.css">

<body>
<p><a href="http://localhost/anna_koksharova/"><img src="static/images/logo.jpg" class="rightimg"></a></p>
<h4 align='left'>NATURA SIBERICA</h4>
<h1 align='left'>Контактные данные:</h1>
<?php

$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("kompan");
mysql_set_charset('utf8');

if (!$connection || !$db)
{
    exit(mysql_error());
}

$result = mysql_query("SELECT * FROM inform");

mysql_close();

while($row = mysql_fetch_array($result))
{?>

<h2><?php  echo $row['adres'];	?></h2>
<h2><?php  echo $row['tel'];	?></h2>
<h2><?php  echo $row['email']."<br>";	?></h2>
<br>
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