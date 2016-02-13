<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['username'])&&isset($_POST['password'])){
  if(!empty($_POST['username'])&&!empty($_POST['password'])){
    $user = ($_POST['username']);
    $pass = ($_POST['password']);
    $pass1 = md5($pass);
    
    $query = "SELECT * FROM STUDENT WHERE (USERNAME = '$user' AND PASSWORD_HASH = '$pass1')";
    
    $result = mysql_query ($query);
    if (mysql_num_rows($result) == 1) {
      $var=true;
    } else {
      $var=false;
      echo 'Invalid Username/Password';
    }
    if($var){
      header('Location: register.php');
    }
  }
}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>User Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>User Login </h1>
      <form method="post" >
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
    <div class="login-help">
      <p>Forgot your password? <a href="https://start.snu.edu.in/PWDResetPRTL.aspx">Click here to reset it</a>.</p>
      <p><a href="admin.php">Login as administrator</a>.</p>
    </div>
  </section>
</body>
</html>


