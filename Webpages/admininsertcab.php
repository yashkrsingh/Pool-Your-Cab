<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['cabnumber'])&&isset($_POST['cabtype'])&&isset($_POST['cabrate'])){
  if(!empty($_POST['cabnumber'])&&!empty($_POST['cabtype'])&&!empty($_POST['cabrate'])){
    $number = ($_POST['cabnumber']);
    $type = ($_POST['cabtype']);
    $rate = ($_POST['cabrate']);
    
    $query = "INSERT INTO CAB VALUES ('$number', '$type', '$rate')";
    
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
      <h1>Insertion in CAB Table </h1>
      <form method="post">
        <p>Cab Number<br><br><input type="text" name="cabnumber" value="" placeholder="Vehicle Number"></p>
	<p>Cab Type<br><br>
            <input type="radio" name="cabtype" value="MINI" /> Mini <br>
            <input type="radio" name="cabtype" value="SEDAN" /> Sedan <br>
            <input type="radio" name="cabtype" value="SUV" /> SUV <br>
            <input type="radio" name="cabtype" value="TRAVELLER" /> Traveller <br>
        <p>Cab Rate<br><br><input type="text" name="cabrate" value="" placeholder="Rate per km"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Insert"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
