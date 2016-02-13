<?php
require 'connect.inc.php';
$query = "UPDATE CAB SET ALLOCATION='N'";
$result = mysql_query ($query);
if($result){
  header('Location: adminaccess.php');
}
else
echo "Something Wrong";

?>