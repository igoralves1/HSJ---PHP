<?php
header('Content-Type:application/json');
include_once '../../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];



if ($verb=="GET") {
   
        header("HTTP/1.1 200 ok");
        
        if(isset($_GET['id'])){
            echo db::editRoomInfo($_GET['id']);  
        }
        else{
            echo "Please, provide Room id like:  ... .php?id=23";  
        }
}
else{
        die("Nothing for you at this page !");        
}


