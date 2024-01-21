<?php

$source = mysql_connect('localhost', 'wwwinvesbursa', '1129AwuvzsdIr') or die("Can't connect user 'fareasth_bursa' from source DB. MySQL Says:".  mysql_error());
$dest = mysql_connect('localhost', 'wwwinvesbursa', '1129AwuvzsdIr',true) or die("Can't connect user 'fareasth_bursa' from source DB. MySQL Says:".  mysql_error());

mysql_select_db('wwwinves_yahoo', $source) or die("Can't Select source DB. MySQL Says:".  mysql_error());
mysql_select_db('wwwinves_bursa', $dest) or die("Can't Select dest., DB. MySQL Says:".  mysql_error());

$sql = mysql_query('SELECT * FROM `yahoo` ORDER BY `id` DESC LIMIT 1', $source) or die("Can't Select `yahoo` Table. MySQL Says:".mysql_error());
$row = mysql_fetch_assoc($sql);

if ($row['market_cap']) {
    echo "Current value: ".$row['market_cap'];
    $sql = mysql_query('SELECT * FROM `pages` WHERE `type`="priceticker"', $dest) or die("Can't Select `pages` Table. MySQL Says:".mysql_error());
    $data = mysql_fetch_assoc($sql);

    $market_cap = $data['left_block1_content'];
    $market_cap = preg_replace('/<strong id="marketcap">(.*?)<\/strong>/', '<strong id="marketcap">'.$row['market_cap'].'</strong>', $market_cap);
//echo "<br />----------------<br />";
//echo $market_cap;
    $new_string = str_replace("'",'"',$market_cap);
    $sql = mysql_query("UPDATE `pages` SET `left_block1_content` = '{$new_string}'  WHERE `type`='priceticker';", $dest) or die(mysql_error());
}

