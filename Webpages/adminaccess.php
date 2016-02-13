<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Database Details</title>
  <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Database Details </h1>
      Current Tables in the database: <br>
      <b>Student</b><br>
      <b>Places</b><br>
      <b>Cab</b><br>
      <b>Driver</b><br>
      <b>Admin</b><br>
      <b>Register</b><br>
      <b>Final Allocation</b><br><br><br>
      <h1> Student Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT * FROM STUDENT";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'ROLL NUMBER'.'</td><td>'.'NAME'.'</td><td>'.'PHONE NUMBER'.'</td><td>'.'EMAIL'.'</td><td>'.'USERNAME'.'</td><td>'.'PASSWORD'.'</td></tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $roll = $row['ROLL_NUMBER'];
              $name = $row['NAME'];
              $phone = $row['PHONE_NUMBER'];
              $email = $row['EMAIL'];
              $username = $row['USERNAME'];
              $password = $row['PASSWORD_HASH'];
              echo '<tr><td>'.$roll.'</td><td>'.$name.'</td><td>'.$phone.'</td><td>'.$email.'</td><td>'.$username.'</td><td>'.$password.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br><br>';
       ?>
      <h1> Place Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT * FROM PLACES";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'PLACE ID'.'</td><td>'.'PLACE NAME'.'</td><td>'.'PLACE DISTANCE'.'</td></tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $id = $row['PLACE_ID'];
              $pname = $row['PLACE_NAME'];
              $pdist = $row['PLACE_DISTANCE'];
              echo '<tr><td>'.$id.'</td><td>'.$pname.'</td><td>'.$pdist.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br><br>';
       ?>
      <h1> Cab Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT CAB_NUMBER,CAB_CARTYPE,CAB_RATE FROM CAB";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'CAB NUMBER'.'</td><td>'.'CAR TYPE'.'</td><td>'.'CAB RATE(PER KM)'.'</td></tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $id = $row['CAB_NUMBER'];
              $type = $row['CAB_CARTYPE'];
              $rate = $row['CAB_RATE'];
              echo '<tr><td>'.$id.'</td><td>'.$type.'</td><td>'.$rate.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br><br>';
    ?>
    <div class="login-help"><p><a href="cleanupcab.php">Click here to clear the allocations </a></p></div><br>
    <br><br>
    <h1> Driver Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT * FROM DRIVER";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'DRIVER ID'.'</td><td>'.'DRIVER NAME'.'</td><td>'.'CONTACT NUMBER'.'</td><td>'.'DRIVER CAB NUMBER'.'</tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $id = $row['DRIVER_ID'];
              $name = $row['DRIVER_NAME'];
              $contact = $row['DRIVER_CONTACT'];
              $cnum = $row['DRIVER_CAB_NUMBER'];
              echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$contact.'</td><td>'.$cnum.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br><br>';
    ?>
    <h1> Admin Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT * FROM ADMIN";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'ADMIN ID'.'</td><td>'.'USERNAME'.'</td><td>'.'PASSWORD HASH'.'</td></tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $id = $row['ADMINID'];
              $name = $row['USERNAME'];
              $contact = $row['PASSWORD_HASH'];
              echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$contact.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br><br>';
    ?>
    <h1> Registration Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT ROLL_NUMBER,JOURNEY_DATE,JOURNEY_TIME,JOURNEY_PLACE_ID,NUMBER_PEOPLE,POOL_IN FROM REGISTER ORDER BY JOURNEY_DATE";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'ROLL NUMBER'.'</td><td>'.'JOURNEY DATE'.'</td><td>'.'JOURNEY TIME'.'</td><td>'.'DESTINATION ID'.'</td><td>'.'NUMBER OF PEOPLE'.'</td><td>'.'POOL IN FACILITY'.'</td></tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $roll = $row['ROLL_NUMBER'];
              $date = $row['JOURNEY_DATE'];
              $time = $row['JOURNEY_TIME'];
              $placeid = $row['JOURNEY_PLACE_ID'];
              $number = $row['NUMBER_PEOPLE'];
              $poolin = $row['POOL_IN'];
              echo '<tr><td>'.$roll.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$placeid.'</td><td>'.$number.'</td><td>'.$poolin.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br>';
    ?>
    <div class="login-help"><p><a href="logic.php">Click here to allot cabs to registrants </a></p></div><br>
    <div class="login-help"><p><a href="procedure.php">Click here to allot cabs to registrants (using procedure) </a></p></div><br>
    <div class="login-help"><p><a href="cleanupregisteradmin.php">Click here to clear the allocations </a></p></div><br>
    <br><br>
     <h1> Final Table </h1>
          <?php
            require 'connect.inc.php';
            $query = "SELECT ROLL_NUMBER,JOURNEY_DATE,JOURNEY_PLACE_ID,CAB_NUMBER,NUMBER_PEOPLE,POOL_IN FROM FINAL ORDER BY JOURNEY_DATE";
            $query_run = mysql_query($query);
            echo '<div class="CSSTableGenerator" ><table>';
            echo '<tr><td>'.'ROLL NUMBER'.'</td><td>'.'JOURNEY DATE'.'</td><td>'.'DESTINATION ID'.'</td><td>'.'CAB NUMBER'.'</td><td>'.'NUMBER OF PEOPLE'.'</td><td>'.'POOL IN FACILITY'.'</td></tr>';
            while($row = mysql_fetch_assoc($query_run)){
              $roll = $row['ROLL_NUMBER'];
              $date = $row['JOURNEY_DATE'];
              $placeid = $row['JOURNEY_PLACE_ID'];
              $cabnum = $row['CAB_NUMBER'];
              $number = $row['NUMBER_PEOPLE'];
              $poolin = $row['POOL_IN'];
              echo '<tr><td>'.$roll.'</td><td>'.$date.'</td><td>'.$placeid.'</td><td>'.$cabnum.'</td><td>'.$number.'</td><td>'.$poolin.'</td></tr>';
            }
            echo '</table></div>';
            echo '<br>';
    ?>
    <div class="login-help"><p><a href="cleanupfinal.php">Click here to clear the final table </a></p></div><br>
    <br><br>
    <h1> Final Allocation View </h1>
          <?php
          require 'connect.inc.php';
          $query2 = "DROP VIEW IF EXISTS ALLOC";
          $query_run2 = mysql_query($query2);
          $query1 = "CREATE VIEW ALLOC AS SELECT FINAL.ROLL_NUMBER,STUDENT.NAME,FINAL.JOURNEY_DATE,REGISTER.JOURNEY_TIME,PLACES.PLACE_NAME,FINAL.CAB_NUMBER,CAB.CAB_CARTYPE,FINAL.POOL_IN,FINAL.NUMBER_PEOPLE,CAB_RATE * PLACE_DISTANCE AS AMOUNT,DRIVER_NAME,DRIVER_CONTACT
                    FROM REGISTER,FINAL,CAB,PLACES,STUDENT,DRIVER
                    WHERE (REGISTER.ROLL_NUMBER = FINAL.ROLL_NUMBER AND REGISTER.JOURNEY_DATE = FINAL.JOURNEY_DATE AND CAB.CAB_NUMBER=FINAL.CAB_NUMBER AND PLACES.PLACE_ID=FINAL.JOURNEY_PLACE_ID AND STUDENT.ROLL_NUMBER=FINAL.ROLL_NUMBER AND DRIVER.DRIVER_CAB_NUMBER=CAB.CAB_NUMBER)
                    ORDER BY FINAL.JOURNEY_DATE";
          $query_run1 = mysql_query($query1);
          $query3 =  "SELECT * FROM ALLOC";
          $query_run3 = mysql_query($query3);
          echo '<div class="CSSTableGenerator" ><table>';
          echo '<tr><td>'.'ROLL NUMBER'.'</td><td>'.'NAME'.'</td><td>'.'JOURNEY DATE'.'</td><td>'.'JOURNEY TIME'.'</td><td>'.'DESTINATION'.'</td><td>'.'CAB NUMBER'.'</td><td>'.'CAR TYPE'.'</td><td>'.'POOL IN'.'</td><td>'.'NUMBER OF PEOPLE'.'</td><td>'.'AMOUNT (IN INR)'.'</td><td>'.'DRIVER NAME'.'</td><td>'.'DRIVER CONTACT'.'</td></tr>';
          while($row = mysql_fetch_assoc($query_run3)){
            $roll = $row['ROLL_NUMBER'];
            $name = $row['NAME'];
            $date = $row['JOURNEY_DATE'];
            $time = $row['JOURNEY_TIME'];
            $place = $row['PLACE_NAME'];
            $cnum = $row['CAB_NUMBER'];
            $ctype = $row['CAB_CARTYPE'];
            $poolin = $row['POOL_IN'];
            $num = $row['NUMBER_PEOPLE'];
            $amount = $row['AMOUNT'];
            $dname = $row['DRIVER_NAME'];
            $contact = $row['DRIVER_CONTACT'];
            echo '<tr><td>'.$roll.'</td><td>'.$name.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$place.'</td><td>'.$cnum.'</td><td>'.$ctype.'</td><td>'.$poolin.'</td><td>'.$num.'</td><td>'.$amount.'</td><td>'.$dname.'</td><td>'.$contact.'</td></tr>';
          }
          echo '</table></div>';
          echo '<br><br>';
       ?>

    <h1> Insertions In Tables </h1>
    1. To insert data in STUDENT table <div class="login-help"><a href="admininsertstudent.php">Click here</a></div><br>
    2. To insert data in PLACES table <div class="login-help"><p><a href="admininsertplaces.php">Click here</a></p></div><br>
    3. To insert data in CAB table <div class="login-help"><p><a href="admininsertcab.php">Click here</a></p></div><br>
    4. To insert data in DRIVER table <div class="login-help"><p><a href="admininsertdriver.php">Click here</a></p></div><br>
    5. To insert data in ADMIN table <div class="login-help"><p><a href="admininsertadmin.php">Click here</a></p></div><br><br>
    <h1> Deletions In Tables </h1>
    1. To delete data from STUDENT table <div class="login-help"><a href="admindeletestudent.php"> Click here </a></div><br>
    2. To delete data from PLACES table <div class="login-help"><p><a href="admindeleteplaces.php">Click here</a></p></div><br>
    3. To delete data from CAB table <div class="login-help"><p><a href="admindeletecab.php">Click here</a></p></div><br>
    4. To delete data from DRIVER table <div class="login-help"><p><a href="admindeletedriver.php">Click here</a></p></div><br>
    5. To delete data from ADMIN table <div class="login-help"><p><a href="admindeleteadmin.php">Click here</a></p></div><br>
     </div>
     <br>
    <div class="login-help">
     <p><center><a href="admin.php">Logout</a><center></p>
    </div>
  </section>
</body>
</html>