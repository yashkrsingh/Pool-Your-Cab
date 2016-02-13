<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['username'])&&isset($_POST['password'])){
  if(!empty($_POST['username'])&&!empty($_POST['password'])){
    @$user = ($_POST['username']);
    @$pass = ($_POST['password']);
    $pass1 = md5($pass);
    
    $query = "SELECT * FROM ADMIN WHERE (USERNAME = '$user' AND PASSWORD_HASH = '$pass1')";
    
    $result = mysql_query ($query);
    if (mysql_num_rows($result) == 1) {
      $var=true;
    } else {
      $var=false;
      echo 'Invalid Username/Password';
    }
    if($var){
      header('Location: adminaccess.php');
    }
  }
}
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login As Administrator</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login as Administrator </h1>
      <form method="post">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><center><input type="submit" name="commit" value="Login"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
