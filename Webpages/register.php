<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['rollnumber'])&&isset($_POST['destination'])&&isset($_POST['date'])&&isset($_POST['time'])&&isset($_POST['number'])&&isset($_POST['pool'])){
  if(!empty($_POST['rollnumber'])&&!empty($_POST['destination'])&&!empty($_POST['date'])&&!empty($_POST['time'])&&!empty($_POST['number'])&&!empty($_POST['pool'])){
    @$roll = ($_POST['rollnumber']);
    @$destination = ($_POST['destination']);
    @$date = ($_POST['date']);
    @$time = ($_POST['time']);
    @$number = ($_POST['number']);
    @$logic = ($_POST['pool']);
    $alloc = 'N';
    if($number>1)
    $logic='N';
    $A = strtotime($date);
    $B = strtotime('+7 days');
    $C = strtotime('today');
    if(!($A >= $C) || !($A < $B)){
    die ('Invalid Date <br> Click on back button of your browser to go back '.$A.' '.$B.' '.$C);
    };

    $query = "INSERT INTO REGISTER VALUES ('$roll', '$date', '$time', '$destination', '$number', '$logic', '$alloc')";
    
    $result = mysql_query ($query);
    if ($result) {
      $var=true;
      header('Location: done.php');
    } else {
      $var=false;
      echo 'Invalid Data/Form already filled';
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
      <h1>Registration </h1>
      <form method="post">
        <p>Name<br><br><input type="text" name="name" value="" placeholder="Name"></p>
        <p>Roll Number<br><br><input type="text" name="rollnumber" value="" placeholder="10 Digit Roll Number"></p>
	<p>Destination<br><br>
            <input type="radio" name="destination" value="HNZRS" /> Hazrat Nizamuddin <br>
            <input type="radio" name="destination" value="NDRLS" /> New Delhi Railway Station <br>
            <input type="radio" name="destination" value="S37ND" /> Noida Sector 37 <br>
            <input type="radio" name="destination" value="PCGRN" /> Pari Chowk <br>
            <input type="radio" name="destination" value="GHZBD" /> Ghaziabad <br>
            <input type="radio" name="destination" value="AVRMS" /> Anand Vihar ISBT <br>
            <input type="radio" name="destination" value="GURGN" /> Gurgaon <br>
            <input type="radio" name="destination" value="CONPL" /> Connaught Place <br>
            <input type="radio" name="destination" value="IGIT3" /> Airport T3 <br></p>
        <p>Date of Journey<br><br><input type="text" name="date" value="" placeholder="YYYY-MM-DD (Max 7 days from now)"></p>
        <p>Time of Journey<br><br><input type="text" name="time" value="" placeholder="HH:MM (24 Hour Format)"></p>
        <p>Number of People<br><br><input type="text" name="number" value="" placeholder="Maximum 10"></p>
        <p>Pool-in Facility<br><br>
            <input type="radio" name="pool" value="Y" /> Yes <br>
            <input type="radio" name="pool" value="N" /> No <br></p>
        <p class="submit"><center><input type="submit" name="submit" value="Submit"><center></p>
      </form>
    </div>
  </section>
</body>
</html>