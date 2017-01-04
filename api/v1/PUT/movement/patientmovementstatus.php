<?php
header('Content-Type:application/json');

$verb=$_SERVER['REQUEST_METHOD'];

include_once '../../../class/db.php';


if ($verb=="GET") {
   
        if(isset($_GET['p_session'])){
           header("HTTP/1.1 200 tudook");
           $p_session = $_GET['p_session'];
           echo json_encode(db::patientecurrentsatus_mouvement_alert($p_session));           
        }
        else{
        die("Nothing for you at this page !");
    }
}





else{
        die("Nothing for you at this page !");
    }