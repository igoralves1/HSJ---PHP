<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

echo "retry: 1000\n";

        $servername = "localhost";
        $username = "hsj";
        $password = "123";
        $dbname = "hsjsi";
        
         try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
            
            $stmt = $conn->prepare("SELECT exams FROM exams");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $exam = $result['exams'];
            
            //echo "data:<p style='color:blue;'>{$str}</p>\n\n";
            
            $time = date('r');
            $arrToJSON = array(
                "room1" => array(
                    "time" => $time,
                    "carc1" => 66678900009,
                    "carc2" => "$exam",
                ),
                "room2" => array(
                    "time" => $time,
                    "carc1" => 777,
                    "carc2" => "testR2C2",
                ),
                "room3" => array(
                    "time" => $time,
                    "carc1" => 123412,
                    "carc2" => "le nom du patient",
                ),
            );

            $return = json_encode($arrToJSON);
            echo "data: $return\n\n";
            
            
            
            
        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;
 


flush();        










flush();
?>
