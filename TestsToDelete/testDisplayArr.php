<?php

$servername = "localhost";
        $username = "hsj";
        $password = "123";
        $dbname = "hsjsi";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully"; 
            
            
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
            $arrTot = $stmt->fetchAll(PDO::FETCH_NAMED);
            
            
            echo "<pre>";
            print_r($arrTot);
            echo "</pre>";
            
            
            foreach ($arrTot as $key => $value) {
                
            }
            
            
            
        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;