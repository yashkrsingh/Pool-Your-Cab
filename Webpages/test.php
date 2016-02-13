<?php
require 'connect.inc.php';
$query = "select CAB_NUMBER from CAB where CAB_NUMBER like 'DL3X%'";
$result = mysql_query($query);
$fw = mysql_fetch_row($result);
$c = $fw[0];
echo $c;
?>