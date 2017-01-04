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
include_once '../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];

        
//if ($verb=="POST") {
if ($verb=="POST") {
   
        header("HTTP/1.1 201 tudook");
        
        $arrTot=$_POST;
    
        $arrPedA=$arrTot["pedA"];
        db::update_Patron(2, $arrPedA["patron"]);
        db::update_Fellow(2, $arrPedA["fellow"]);
        db::update_Resident($arrPedA["residents"]);        
        $arrPedB=$arrTot["pedB"];
        db::update_Patron(3, $arrPedB["patron"]);
        db::update_Fellow(3, $arrPedB["fellow"]);        
        $arrChiC=$arrTot["ChiC"];
        db::update_Patron(1, $arrChiC["patron"]);
        db::update_Fellow(1, $arrChiC["fellow"]);        
        $arrAssistant=$arrTot["assistant"];
        db::update_assistant($arrAssistant[0]);        
        $arrChefEquip=$arrTot["chefEquip"];
        db::update_ChefEquip($arrChefEquip);        
        $arrInhalo=$arrTot["inhalo"];
        db::update_Inhalotherapeute($arrInhalo);        
        $arrPb=$arrTot["pb"];
        db::update_prepose($arrPb);
        $arrPharmacien=$arrTot["pharmacien"];
        db::update_pharmacist($arrPharmacien);
        $arrAgentSalub=$arrTot["agentSalub"];
        db::update_agentsalubrite($arrAgentSalub);
        $arrAgentAdmin=$arrTot["agentAdmin"];
        db::update_agentadmin($arrAgentAdmin[0]);
 
           
}
else{
        die("Not POST!");
        
    }