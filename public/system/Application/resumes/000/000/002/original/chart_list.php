<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ocknetmy_chart');
define('DB_PASSWORD', 'f#792@btWw#c');
define('DB_DATABASE', 'ocknetmy_chart');
$connection = mysql_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());


$sql=mysql_query("SELECT * FROM charts where published=1");

while($q=mysql_fetch_assoc($sql))
	$result[]=$q;
echo json_encode($result);
?>