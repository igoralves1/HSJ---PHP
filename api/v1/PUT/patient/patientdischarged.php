<?php

/* 
   When a patient is dischrged from service 
   1 - Save the content from patientecurrentsatus into patientecurrentsatus_history
   2 - IF (step 1 is ok) Save the content from examcurrentsession into examcurrentsession_history
   3 - IF (step 2 is ok) Save the content from conge_current_satus into conge_current_satus_history
   4 - IF (step 3 is ok) Delete the patientSession's Info from conge_current_satus, examcurrentsession, patientecurrentsatus
   5 - The step 4 will release the Room in patientecurrentsatus. The room will become available
 * 
 * 
 */



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