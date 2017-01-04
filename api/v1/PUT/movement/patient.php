<?php


header('Content-Type:application/json');
include_once '../../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];

        
if ($verb=="PUT") {
   
        header("HTTP/1.1 201 tudook");
        parse_str(file_get_contents("php://input"),$post_vars);  
        echo db::update_patient_move($post_vars);
        
}
else{
        die("Not POST!");        
    }