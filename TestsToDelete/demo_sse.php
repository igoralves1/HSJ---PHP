<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

/*
$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
*/ 
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
            
            $str = $result['exams'];
            echo "retry: 1000\n";
            echo "data:<p style='color:blue;'>{$str}</p>\n\n";
            
            /*
            echo "event: room_01\n";
            echo "data: {\n";
            echo "data: 'pName': $str\n";
            echo "data: 'msg': 'msgtest',\n";
            echo "data: }\n\n";
            */
            
            
            
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;
 


flush();        
        
        
        
        
        
        
        
//https://bocoup.com/weblog/chrome-6-server-sent-events-with-new-eventsource     
//https://www.html5rocks.com/en/tutorials/eventsource/basics/#toc-reconnection-timeout
//http://www.howopensource.com/2014/12/introduction-to-server-sent-events/
//http://html5doctor.com/server-sent-events/
//https://css-tricks.com/css-variables-with-php/
//http://stackoverflow.com/jobs/121053/full-stack-developer-for-award-winning-saas-sametrica?med=clc&ref=large-sidebar-orange-nearyou
        
        
        

?>
