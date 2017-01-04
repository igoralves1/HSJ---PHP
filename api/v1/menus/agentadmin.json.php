<?php
header('Content-Type:application/json');

$verb=$_SERVER['REQUEST_METHOD'];

include_once '../../../class/menu.php';


if ($verb=="GET") {
   
        header("HTTP/1.1 200 tudook");
        
        echo menu::agentadmin();  
        
}
else{
        die("Nothing for you at this page !");
        
    }