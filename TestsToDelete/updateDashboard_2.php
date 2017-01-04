<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

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
            
            	$r1Svg1="#f68a04";//Orange
            	$r2Svg2="#f4f604";//yellow
            	$r1c1sp1="bg-success";//success
            if($exam=="CT-SCAN1 (TOMODENSITOMÉTRIE)"){
            	$r1Svg1="#00ff00";//green
            	$r2Svg2="#0000ff";//blue
            	$r1c1sp1="bg-danger";//warning
            }

            
            //ici




            
            $time = date('r');
            $arrToJSON = array(
                "room1" => array(
                    "time" => $time,
                    "carc1" => 66678900009,
                    "carc2" => "$exam",
                    "r1Svg1" => "$r1Svg1",
                    "r1c1sp1" => "$r1c1sp1",
                ),
                "room2" => array(
                    "time" => $time,
                    "carc1" => 777,
                    "carc2" => "testR2C2",
                    "r2Svg2" => "$r2Svg2",
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
?>

