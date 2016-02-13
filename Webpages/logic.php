<?php
require 'connect.inc.php';

function alloc($date){
$register = "SELECT * FROM REGISTER";
$regresult = mysql_query($register);
$cab = "SELECT * FROM CAB";
$cabresult = mysql_query($cab);
while($regw = mysql_fetch_assoc($regresult)){
  if($regw['JOURNEY_DATE']==$date){
  while($cabw = mysql_fetch_assoc($cabresult)){
    if($regw['POOL_IN']=='N'){
      if($regw['NUMBER_PEOPLE']<=3&&$cabw['CAB_CARTYPE']=='MINI'&&$regw['ALLOCATION']=='N'&&$cabw['ALLOCATION']=='N'){
        $q = $regw['ROLL_NUMBER'];
        $w = $regw['JOURNEY_DATE'];
        $y = $regw['JOURNEY_PLACE_ID'];
        $e = $cabw['CAB_NUMBER'];
        $r = $regw['POOL_IN'];
        $t = $regw['NUMBER_PEOPLE'];
        $query = "INSERT INTO FINAL VALUES ('$q', '$w', '$y', '$e', '$r', '$t')";
        mysql_query($query);
        $query2 = "UPDATE REGISTER SET ALLOCATION='Y' WHERE ROLL_NUMBER = '$q'";
        mysql_query($query2);
        $query3 = "UPDATE CAB SET ALLOCATION='Y' WHERE CAB_NUMBER = '$e'";
        mysql_query($query3);
        break;
      }
      else if($regw['NUMBER_PEOPLE']>3&&$regw['NUMBER_PEOPLE']<=4&&$cabw['CAB_CARTYPE']=='SEDAN'&&$regw['ALLOCATION']=='N'&&$cabw['ALLOCATION']=='N'){
        $q = $regw['ROLL_NUMBER'];
        $w = $regw['JOURNEY_DATE'];
        $y = $regw['JOURNEY_PLACE_ID'];
        $e = $cabw['CAB_NUMBER'];
        $r = $regw['POOL_IN'];
        $t = $regw['NUMBER_PEOPLE'];
        $query = "INSERT INTO FINAL VALUES ('$q', '$w', '$y', '$e', '$r', '$t')";
        mysql_query($query);
        $query2 = "UPDATE REGISTER SET ALLOCATION='Y' WHERE ROLL_NUMBER = '$q'";
        mysql_query($query2);
        $query3 = "UPDATE CAB SET ALLOCATION='Y' WHERE CAB_NUMBER = '$e'";
        mysql_query($query3);
        break;
      }
      else if($regw['NUMBER_PEOPLE']>4&&$regw['NUMBER_PEOPLE']<=6&&$cabw['CAB_CARTYPE']=='SEDAN'&&$regw['ALLOCATION']=='N'&&$cabw['ALLOCATION']=='N'){
        $q = $regw['ROLL_NUMBER'];
        $w = $regw['JOURNEY_DATE'];
        $y = $regw['JOURNEY_PLACE_ID'];
        $e = $cabw['CAB_NUMBER'];
        $r = $regw['POOL_IN'];
        $t = $regw['NUMBER_PEOPLE'];
        $query = "INSERT INTO FINAL VALUES ('$q', '$w', '$y', '$e', '$r', '$t')";
        mysql_query($query);
        $query2 = "UPDATE REGISTER SET ALLOCATION='Y' WHERE ROLL_NUMBER = '$q'";
        mysql_query($query2);
        $query3 = "UPDATE CAB SET ALLOCATION='Y' WHERE CAB_NUMBER = '$e'";
        mysql_query($query3);
        break;
      }
      else if($regw['NUMBER_PEOPLE']>6&&$cabw['CAB_CARTYPE']=='TRAVELLER'&&$regw['ALLOCATION']=='N'&&$cabw['ALLOCATION']=='N'){
        $q = $regw['ROLL_NUMBER'];
        $w = $regw['JOURNEY_DATE'];
        $y = $regw['JOURNEY_PLACE_ID'];
        $e = $cabw['CAB_NUMBER'];
        $r = $regw['POOL_IN'];
        $t = $regw['NUMBER_PEOPLE'];
        $query = "INSERT INTO FINAL VALUES ('$q', '$w', '$y', '$e', '$r', '$t')";
        mysql_query($query);
        $query2 = "UPDATE REGISTER SET ALLOCATION='Y' WHERE ROLL_NUMBER = '$q'";
        mysql_query($query2);
        $query3 = "UPDATE CAB SET ALLOCATION='Y' WHERE CAB_NUMBER = '$e'";
        mysql_query($query3);
        break;
      }
    } else if($regw['POOL_IN']=='Y'){
            if($regw['ALLOCATION']=='N'&&$cabw['ALLOCATION']=='N'&&$cabw['CAB_CARTYPE']=='MINI'){
            $q = $regw['ROLL_NUMBER'];
            $w = $regw['JOURNEY_DATE'];
            $y = $regw['JOURNEY_PLACE_ID'];
            $e = $cabw['CAB_NUMBER'];
            $r = $regw['POOL_IN'];
            $t = $regw['NUMBER_PEOPLE'];
            $query = "INSERT INTO FINAL VALUES ('$q', '$w', '$y', '$e', '$r', '$t')";
            mysql_query($query);
            $query2 = "UPDATE REGISTER SET ALLOCATION='Y' WHERE ROLL_NUMBER = '$q'";
            mysql_query($query2);
            $query3 = "UPDATE CAB SET ALLOCATION='Y' WHERE CAB_NUMBER = '$e'";
            mysql_query($query3);
            break;
      }
    }
  }
  }
}
mysql_query("UPDATE CAB SET ALLOCATION='N'");
}

function poolin($date,$place){
$final = "SELECT CAB_NUMBER FROM FINAL WHERE (POOL_IN='Y' AND JOURNEY_PLACE_ID='$place' AND JOURNEY_DATE='$date')";
$finresult = mysql_query($final);
global $c;
while($fin = mysql_fetch_assoc($finresult)){
$c= $fin['CAB_NUMBER'];
}
$query = "UPDATE FINAL SET CAB_NUMBER='$c' WHERE (POOL_IN = 'Y' AND JOURNEY_PLACE_ID= '$place' AND JOURNEY_DATE= '$date')";
mysql_query($query);
}


$w = 0;
while($w<=7){
$date = date('Y-m-d', strtotime(" today + $w days"));
alloc($date);
poolin($date,'AVRMS');
poolin($date,'CONPL');
poolin($date,'GHZBD');
poolin($date,'GURGN');
poolin($date,'HNZRS');
poolin($date,'IGIT3');
poolin($date,'NDRLS');
poolin($date,'PCGRN');
poolin($date,'S37ND');
$w++;
}
header('Location: adminaccess.php');
?>