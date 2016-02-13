<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['placeid'])&&isset($_POST['placename'])&&isset($_POST['placedist'])){
  if(!empty($_POST['placeid'])&&!empty($_POST['placername'])&&!empty($_POST['placedist'])){
    @$id = ($_POST['placeid']);
    @$name = ($_POST['placename']);
    @$dist = ($_POST['placedist']);
    
    $query = "INSERT INTO PLACES VALUES ('$id', '$name', '$dist')";
    
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
      <h1>Insertion in PLACES Table </h1>
      <form method="post">
        <p>Place ID<br><br><input type="text" name="placeid" value="" placeholder="Place ID"></p>
        <p>Place Name<br><br><input type="text" name="placename" value="" placeholder="Place Name"></p>
        <p>Distance (in km)<br><br><input type="text" name="placedist" value="" placeholder="Distance from SNU"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Insert"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
