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
            
            
            $sql="SELECT r.roomnumber,r.pression,r.hemodialysis,r.soins_palliatif,r.tel,sr.statusroom, pcs.* FROM room as r

                    INNER JOIN roomcurrentstatus AS rcs
                    ON(rcs.fk_room=r.id)

                    INNER JOIN statusroom AS sr
                    ON(rcs.fk_statusroom=sr.id)

                    left JOIN patientecurrentsatus AS pcs
                    ON(r.roomnumber=pcs.roomnumber)

                    where r.roomnumber <> '13'
                    order by r.id ASC
                   ";
            
            
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_NAMED);
            
            $arrTot = $result['exams'];
            
            	$r1Svg1="#f68a04";//Orange
            	$r2Svg2="#f4f604";//yellow
            	$r1c1sp1="bg-success";//success
        

            
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

