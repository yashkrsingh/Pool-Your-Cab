<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['driverid'])){
  if(!empty($_POST['driverid'])){
    @$number = ($_POST['driverid']);
    
    $query = "DELETE FROM DRIVER WHERE DRIVER_ID='$number'";
    
    $result = mysql_query ($query);
    if ($result) {
      $var=true;
      header('Location: adminaccess.php');
    } else {
      $var=false;
      echo 'Invalid Data/Empty Field/Data already deleted';
    }
  }
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Deletion from DRIVER Table </h1>
      <form method="post">
        <p>Driver ID<br><br><input type="text" name="driverid" value="" placeholder="Driver ID"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Delete"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
