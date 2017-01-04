<?php
header('Content-Type:application/json');
include_once '../../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];

$filePath=$_SERVER['SCRIPT_NAME'];
$split1 = explode("/", $filePath);

//preg_match("/(?<=_)(.*?)(?=.json)/", $split1[5], $matches);
preg_match("/(?<=_)[^.]+/", $split1[5], $matches);
$tableName = $matches[0];

if ($verb=="GET") {
   
        header("HTTP/1.1 200 ok");
        
        if(isset($_GET['type']) && $_GET['type']=="arr"){
            echo db::get_list($tableName,'arr');  
        }
        else{
            echo db::get_list($tableName);  
        }
}
else{
        die("Nothing for you at this page !");        
    }