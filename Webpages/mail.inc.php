<?php
require 'connect.inc.php';
$query = "SELECT * FROM FINALLOG";
$query_run = mysql_query($query);
while($row=mysql_fetch_assoc($query_run)){
  $email = $row['EMAIL'];
  $roll = $row['ROLL_NUMBER'];
  $name = $row['NAME'];
  $time =  $row['TIME'];
  $date =  $row['DATE'];
  $cabnum =  $row['CAB_NUMBER'];
  $drivername =  $row['DRIVER_NAME'];
  $contact =  $row['DRIVER_CONTACT'];

  $to = $email;
  $subject = 'CAB REGISTRATION DETAILS';
  $body =  "Student Info\nName: $name \nRoll Number: $roll \n
  Cab Info \nJourney Date: $date \nJourney Time: $time \nCab Number: $cabnum \nDriver Name: $drivername \nDriver Contact: $contact";
  $headers =  'From: snustudentcab@snu.edu.in';
  mail($to, $subject, $body, $headers);
}

?>