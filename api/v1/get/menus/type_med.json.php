<?php
header('Content-Type:application/json ; charset=utf-8');

$verb=$_SERVER['REQUEST_METHOD'];

include_once '../../../../class/menu.php';


if ($verb=="GET") {
   
        header("HTTP/1.1 200 tudook");
        
        echo menu::type_med();  
        
}
else{
        die("Nothing for you at this page !");
        
    }