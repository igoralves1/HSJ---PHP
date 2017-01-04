<?php
header('Content-Type:application/json');
include_once '../../../class/db.php';
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$verb=$_SERVER['REQUEST_METHOD'];
xdebug_break();
//if ($verb=="POST") {
if ($verb=="POST") {
   
    header("HTTP/1.1 201 tudook");
    $jsonInfo=$_POST["dt"];    
   
    echo db::update_ProfesDisponibility($jsonInfo);
        
           
}
else{
        die("Not POST!");
        
    }