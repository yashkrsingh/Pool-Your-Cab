<?php
require 'connect.inc.php';
$query = "DELETE FROM FINAL";
$result = mysql_query ($query);
if($result){
  header('Location: adminaccess.php');
}
else
echo "Something Wrong";

?>