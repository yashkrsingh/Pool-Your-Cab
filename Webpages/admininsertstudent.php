<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['rollnumber'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['password'])){
  if(!empty($_POST['rollnumber'])&&!empty($_POST['name'])&&!empty($_POST['phone'])&&!empty($_POST['email'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
    @$roll = ($_POST['rollnumber']);
    @$name = ($_POST['name']);
    @$phone = ($_POST['phone']);
    @$email = ($_POST['email']);
    @$username = ($_POST['username']);
    @$password_hash = ($_POST['password']);
    
    $query = "INSERT INTO STUDENT VALUES ('$roll', '$name', '$phone', '$email', '$username', '$password_hash')";
    
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
      <h1>Insertion in STUDENT Table </h1>
      <form method="post">
        <p>Roll Number<br><br><input type="text" name="rollnumber" value="" placeholder="10 Digit Roll Number"></p>
        <p>Name<br><br><input type="text" name="name" value="" placeholder="Name"></p>
	<p>Phone Number<br><br><input type="text" name="phone" value="" placeholder="Phone Number"></p>
        <p>Email ID<br><br><input type="text" name="email" value="" placeholder="Email"></p>
        <p>Username<br><br><input type="text" name="username" value="" placeholder="Username"></p>
        <p>Password Hash<br><br><input type="text" name="password" value="" placeholder="Password(MD5 Hash)"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Insert"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
