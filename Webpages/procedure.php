<?php
require 'connect.inc.php';
$query = "SELECT * FROM REGISTER";
$result = mysql_query($query);
//$query1 = "SELECT * FROM CAB";
//$result1 = mysql_query($query1);
//while($row1 = mysql_fetch_assoc($result1))
while($row = mysql_fetch_assoc($result)){
  $q = $row['ROLL_NUMBER'];
  $w = $row['JOURNEY_DATE'];
  $e = $row['JOURNEY_PLACE_ID'];
  $r = $row['NUMBER_PEOPLE'];
  $t = $row['POOL_IN'];
  $q = "CALL FINNN('$q', '$w', '$e', '$r', '$t')";
  mysql_query($q);
}
header('Location: adminaccess.php');
?>