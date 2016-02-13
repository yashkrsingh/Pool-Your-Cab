 <?php
echo date("y/m/d");
echo '<br>';
$r = strtotime('today');
echo $r;
echo date("y/m/d", $r);
  ?>