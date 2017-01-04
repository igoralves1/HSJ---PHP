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
            
            
            /*
            //$stmt = $conn->prepare("SELECT exams FROM exams");
            $stmt = $conn->prepare("SHOW TABLES FROM $dbname");
            
            
            $stmt->execute();
            
            //$result = $stmt->fetchAll();
            //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            
          
            echo "<br/>";
            echo "=====================================================";
            echo "<br/>";
            
            
            $arrTbls=$result;
            $stmt = $conn->prepare("SELECT * FROM $dbname");
            
            foreach ($arrTbls as $key => $value) {
                echo "<br/>";
                echo "=====================================================";
                echo "<br/>";
                echo "<h1>$value</h1>";
                echo "<br/>";
                //$stmt = $conn->prepare("SELECT * FROM $value");
                //$stmt->execute();
                //$result = $stmt->fetchAll(PDO::FETCH_COLUMN);
                //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //$result = $stmt->fetchAll(PDO::FETCH_BOTH);
                //$result = $stmt->fetchAll(PDO::FETCH_BOUND);//http://php.net/manual/en/pdostatement.bindcolumn.php
                // ok object $result = $stmt->fetchAll(PDO::FETCH_CLASS);
                //$result = $stmt->fetchAll(PDO::FETCH_INTO);
                //$result = $stmt->fetchAll(PDO::FETCH_LAZY);//General error: PDO::FETCH_LAZY can't be used with PDOStatement::fetchAll()
                // ok array $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                // ok arr index $result = $stmt->fetchAll(PDO::FETCH_NUM);
                // ok array of objects $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                //$result = $stmt->fetchAll(PDO::FETCH_PROPS_LATE);
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                echo "<pre>";
                print_r($result);
                echo "</pre>";
                
                
                
                
                
                
                
                
                
                
            }
            */
            $stmt = $conn->prepare("SELECT * FROM patientecurrentsatus");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_NAMED);
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            
        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;