<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['adminid'])&&isset($_POST['username'])&&isset($_POST['password'])){
  if(!empty($_POST['adminid'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
    $id = ($_POST['adminid']);
    $name = ($_POST['username']);
    $password = ($_POST['password']);
    $password_hash = md5($password);
    
    $query = "INSERT INTO ADMIN VALUES ('$id', '$name', '$password_hash')";
    
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
  <title>Insertion in ADMIN Table</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Insertion in ADMIN Table </h1>
      <form method="post">
        <p>Admin ID<br><br><input type="text" name="adminid" value="" placeholder="Admin ID"></p>
        <p>Username<br><br><input type="text" name="username" value="" placeholder="Username"></p>
        <p>Password<br><br><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Insert"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
