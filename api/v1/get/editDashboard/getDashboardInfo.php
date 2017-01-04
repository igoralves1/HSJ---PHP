<?php
header('Content-Type:application/json');
include_once '../../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];



if ($verb=="GET") {   
        header("HTTP/1.1 200 ok");
        echo db::getDashboardInfo(); 
}
else{
        die("Nothing for you at this page !");        
}
