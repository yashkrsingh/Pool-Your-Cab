<?php
require 'connect.inc.php';
ob_start();
if(isset($_POST['placeid'])){
  if(!empty($_POST['placeid'])){
    $id = ($_POST['placeid']);
    
    $query = "DELETE FROM PLACES WHERE PLACE_ID='$id'";
    
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
  <title>Deletion from PLACES table</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Deletion from PLACES Table</h1>
      <form method="post">
        <p>Place ID<br><br><input type="text" name="placeid" value="" placeholder="Place ID"></p>
        <p class="submit"><center><input type="submit" name="submit" value="Delete"><center></p>
      </form>
    </div>
  </section>
</body>
</html>
