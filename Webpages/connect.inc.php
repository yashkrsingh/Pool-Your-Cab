<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
mysql_connect($mysql_host,$mysql_user,$mysql_password);
if(mysql_select_db('DBMS'))
;
else
echo mysql_error();
date_default_timezone_set('Asia/Calcutta');
?>