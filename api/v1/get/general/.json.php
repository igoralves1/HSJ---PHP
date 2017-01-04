<?php
header('Content-Type:application/json');
include_once '../../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];




if ($verb=="GET") {
   
        header("HTTP/1.1 200 ok");
        
        if(isset($_GET['type']) && $_GET['type']=="arr"){
            echo db::examstatus_type('arr');  
        }
        else{
            echo db::examstatus_type();  
        }
}
else{
        die("Nothing for you at this page !");        
    }