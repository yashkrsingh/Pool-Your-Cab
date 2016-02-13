<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['username'])){
  if(!empty($_POST['username'])){
    $username = ($_POST['username']);

    $query = "DELETE FROM ADMIN WHERE USERNAME='$username'";
    
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
  <title>Deletion from ADMIN table</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Deletion from ADMIN Table </h1>
      <form method="post">
        <p>Username<br><br><input type="text" name="username" value="" placeholder="Username"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Delete"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
