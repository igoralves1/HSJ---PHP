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
                echo "<div>";
                echo "<p id='circle' class='blue'></p>";
                echo "<p style='color:blue;'>$str</p>";
                echo "</div>";
            } else {
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


