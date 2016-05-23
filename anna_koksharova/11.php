<!DOCTYPE HTML>
<html>
<head>


	<title>Untitled 2</title>
</head>

<body>

<?php

$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("kompan");
mysql_set_charset('utf8');

if (!$connection || !$db)
{
    exit(mysql_error());
}

$result = mysql_query("SELECT * FROM tov_lic");

mysql_close();

$row = mysql_fetch_array($result);

echo $row['nazvan_tov'];

?>

</body>
</html>