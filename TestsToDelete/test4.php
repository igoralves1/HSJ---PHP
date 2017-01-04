<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1">
        <title></title>

        <style>


            #circle {                
                height:10px;
                width:10px;
                -webkit-border-radius:5px;
                -moz-border-radius:5px;
            }

            .red {	
                background: red;
            }      
            .blue {	
                background: blue;
            }      

        </style>


    </head>
    <body>

        <?php
        $servername = "localhost";
        $username = "hsj";
        $password = "123";
        $dbname = "hsjsi";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
            $stmt = $conn->prepare("SELECT privileges FROM userprivileges");
            $stmt->execute();




            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //print_r($result['privileges']);

            $str = $result['privileges'];

            $nb = strlen($str);
            
            if (fmod($nb, 2) == 0) {
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
            } else {
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
                echo "<p id='circle' class='red'></p>";
                echo "<p style='color:red;'>$str</p>";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;
        for ($x = 0; $x <= 10000; $x++) {
            
        }
        /*
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT privileges FROM userprivileges");
          $stmt->execute();
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          echo $result;
          echo "<br>";

         */
        ?>
        <a href="http://www.w3schools.com">Visit W3Schools.com!</a>


    </body>
</html>


<?php
/*

  $servername = "localhost";
  $username = "hsj";
  $password = "123";
  $dbname = "hsjsi";

  try {
  $conn = new PDO("mysql:host=$servername;dbname=hsjsi", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  }
  catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
  }


  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  //    VALUES ('John', 'Doe', 'john@example.com')";
  $sql = " INSERT INTO userprivileges (privileges) VALUES ('zazo')";

  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo $sql. "<br>";
  echo "New record created successfully";
  echo "<br>";
  echo "lastInsertId()=".$last_id;

  }
  catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }


  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')");

  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
  }
  catch(PDOException $e)
  {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
  }

  PHP Prepared Statements

  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  // insert a row
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();

  echo "New records created successfully";
  }
  catch(PDOException $e)
  {
  echo "Error: " . $e->getMessage();
  }



  Delete Data From a MySQL Table Using MySQLi and PDO


  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM MyGuests WHERE id=3";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
  }
  catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }










  $conn = null;

 */
?>