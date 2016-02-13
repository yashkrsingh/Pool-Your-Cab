<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['driverid'])&&isset($_POST['drivername'])&&isset($_POST['contact'])&&isset($_POST['cabnumber'])){
  if(!empty($_POST['driverid'])&&!empty($_POST['drivername'])&&!empty($_POST['contact'])&&!empty($_POST['cabnumber'])){
    @$id = ($_POST['driverid']);
    @$name = ($_POST['drivername']);
    @$contact = ($_POST['contact']);
    @$cnum = ($_POST['cabnumber']);
    
    $query = "INSERT INTO DRIVER VALUES ('$id', '$name', '$contact', '$cnum')";
    
    $result = mysql_query ($query);
    if ($result) {
      $var=true;
      header('Location: adminaccess.php');
    } else {
      $var=false;
      echo 'Invalid Data/Empty Field/Data already filled';
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
      <h1>Insertion in DRIVER Table </h1>
      <form method="post">
        <p>Driver ID<br><br><input type="text" name="driverid" value="" placeholder="Driver ID"></p>
        <p>Driver Name<br><br><input type="text" name="drivername" value="" placeholder="Driver Name"></p>
        <p>Contact Number<br><br><input type="text" name="contact" value="" placeholder="Contact Number"></p>
        <p>Cab Number<br><br><input type="text" name="cabnumber" value="" placeholder="Vehicle Number"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Insert"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
