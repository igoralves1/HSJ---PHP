<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
echo "retry: 1000\n";


$servername = "localhost";
$username = "hsj";
$password = "123";
$dbname = "hsjsi";
//echo "retry: 1000\n";


try {
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    /*
    $stmt = $conn->prepare("SELECT R.id, R.roomnumber,R.pression,R.hemodialysis,R.soins_palliatif,R.tel , RS.statusroom, RS.hexrgbcode FROM room R
                                    INNER JOIN roomcurrentstatus AS RCS
                                    ON(RCS.fk_room=R.id)
                                    INNER JOIN statusroom AS RS
                                    ON(RCS.fk_statusroom=RS.id)
                                    ORDER BY R.id ASC;");*/
    
    
    
    //Patron
    $stmt = $conn->prepare("SELECT fk_type_med,fk_patron,patron_name_concatenated FROM patron_type_med_availability
                                WHERE status_at_work=1;");    
    $stmt->execute();
    $patronAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($patronAvail as $v) {
        if($v["fk_type_med"]==1){
            //arrPedA
            $arrPatronCC[]=[
                "id"=>$v["fk_patron"],
                "name"=>$v["patron_name_concatenated"]
            ];
            //$patCCid=$v["fk_patron"];
            //$patCCName=$v["patron_name_concatenated"];
        }
        elseif($v["fk_type_med"]==2){
            $arrPatronPedA[]=[
                "id"=>$v["fk_patron"],
                "name"=>$v["patron_name_concatenated"]
            ];
            //$patPedAid=$v["fk_patron"];
            //$patPedAName=$v["patron_name_concatenated"];
        }
        elseif($v["fk_type_med"]==3){
            $arrPatronPedB[]=[
                "id"=>$v["fk_patron"],
                "name"=>$v["patron_name_concatenated"]
            ];
            //$patPedBid=$v["fk_patron"];
            //$patPedBName=$v["patron_name_concatenated"];
        }
    }
    
    //Fellow
    $stmt = $conn->prepare("SELECT fk_type_med,fk_fellow,fellow_name_concatenated FROM fellow_type_med_availability
                                WHERE status_at_work=1;");    
    $stmt->execute();
    $felronAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($felronAvail as $v) {
        if($v["fk_type_med"]==1){
            $arrFelCC[]=[
                "id"=>$v["fk_fellow"],
                "name"=>$v["fellow_name_concatenated"]
            ];
            //$felCCid=$v["fk_fellow"];
            //$felCCName=$v["fellow_name_concatenated"];
        }
        elseif($v["fk_type_med"]==2){
            $arrFelPedA[]=[
                "id"=>$v["fk_fellow"],
                "name"=>$v["fellow_name_concatenated"]
            ];
            //$felPedAid=$v["fk_fellow"];
            //$felPedAName=$v["fellow_name_concatenated"];
        }
        elseif($v["fk_type_med"]==3){
            $arrFelPedB[]=[
                "id"=>$v["fk_fellow"],
                "name"=>$v["fellow_name_concatenated"]
            ];
            //$felPedBid=$v["fk_fellow"];
            //$felPedBName=$v["fellow_name_concatenated"];
        }
    }
    
    
    //Resident
    $stmt = $conn->prepare("SELECT fk_resident,disp_name FROM resident_current_status
                                WHERE status_at_work=1;");    
    $stmt->execute();
    $residentAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($residentAvail as $v) {
        
            $arrRes[]=[
                "id"=>$v["fk_resident"],
                "name"=>$v["disp_name"]
            ];
            
        
    }
    
    
    //Assistent
    $stmt = $conn->prepare("SELECT fk_assistant,disp_name FROM assistant_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $assistAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($assistAvail as $v) {
        
            $arrAssist[]=[
                "id"=>$v["fk_assistant"],
                "name"=>$v["disp_name"]
            ];
            
        
    }
    
    
    //Assistent
    $stmt = $conn->prepare("SELECT fk_assistant,disp_name FROM assistant_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $assistAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($assistAvail as $v) {
        
            $arrAssist[]=[
                "id"=>$v["fk_assistant"],
                "name"=>$v["disp_name"]
            ];
    }
    
    //Chef
    $stmt = $conn->prepare("SELECT fk_chefeequipe,disp_name FROM chefeequipe_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $cheftAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($cheftAvail as $v) {
        
            $arrChef[]=[
                "id"=>$v["fk_chefeequipe"],
                "name"=>$v["disp_name"]
            ];
    }
    
    
    //inhalotherapeute
    $stmt = $conn->prepare("SELECT fk_inhalo,disp_name FROM inhalo_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $inhaloAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($inhaloAvail as $v) {
        
            $arrinhalo[]=[
                "id"=>$v["fk_inhalo"],
                "name"=>$v["disp_name"]
            ];
    }
    
    
    //agentsalubrite
    $stmt = $conn->prepare("SELECT fk_agentsalubrite,disp_name FROM agentsalubrite_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $agSalubAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($agSalubAvail as $v) {
        
            $arragSalub[]=[
                "id"=>$v["fk_agentsalubrite"],
                "name"=>$v["disp_name"]
            ];
    }
    
    //prepose
    $stmt = $conn->prepare("SELECT fk_prepose,disp_name FROM prepose_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $preposeAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($preposeAvail as $v) {
        
            $arrPrepose[]=[
                "id"=>$v["fk_prepose"],
                "name"=>$v["disp_name"]
            ];
    }
    
    
    //pharmacist
    $stmt = $conn->prepare("SELECT fk_pharmacist,disp_name FROM pharmacist_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $pharmaAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($pharmaAvail as $v) {
        
            $arrPharmaAvail[]=[
                "id"=>$v["fk_pharmacist"],
                "name"=>$v["disp_name"]
            ];
    }
    
    //agentadmin
    $stmt = $conn->prepare("SELECT fk_agentadmin,disp_name FROM agentadmin_current_status
                                WHERE status_at_work='1';");    
    $stmt->execute();
    $agentadminAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    foreach ($agentadminAvail as $v) {
        
            $arragentadminAvaill[]=[
                "id"=>$v["fk_agentadmin"],
                "name"=>$v["disp_name"]
            ];
    }
    
 
    $stmt = $conn->prepare("SELECT R.id, R.roomnumber,R.pression,R.hemodialysis,R.soins_palliatif,R.tel,R.virtualroom , RS.statusroom FROM room R
                                    INNER JOIN roomcurrentstatus AS RCS
                                    ON(RCS.fk_room=R.id)
                                    INNER JOIN statusroom AS RS
                                    ON(RCS.fk_statusroom=RS.id)
                                    ORDER BY R.id ASC;");
    $stmt->execute();
    $arrRoom = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    $stmt = $conn->prepare("SELECT 
                                nb_lit_hospitalier, 
                                roomnumber,
                                paciente_session,
                                fk_codevacuation,
                                fk_deplacementcritique,
                                disp_isolement,
                                disp_type_nursing,
                                fk_chargetravail,
                                disp_type_med,
                                disp_name_patient,
                                disp_name_nursing,
                                mouvement_alert,
                                disp_type_conge,
                                fk_type_conge,
                                scheduled_departure,
                                fk_type_nursing
                            FROM patientecurrentsatus;");
    $stmt->execute();
    $arrPatientTot = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  
    
    $stmt = $conn->prepare("SELECT exty.type,ex.exams,excs.fk_session,excs.dt_requested  FROM examcurrentsession excs
                            INNER JOIN exams AS ex
                            ON(ex.id=excs.fk_exam)
                            INNER JOIN type_exams AS exty
                            ON(exty.id=ex.fk_type_exams);");
    $stmt->execute();
    $arrExamsTot = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    $totSoiInts=0;//Soins intensif
    $totSoiIntd=0;//Soins intermed
    $totNA=0;//NA
    if(count($arrExamsTot)>0){
        foreach ($arrExamsTot as $v) {
            
            $phpdate = strtotime( $v["dt_requested"] );
            $arrInspections[$v["fk_session"]][]=[
                               "name"=> $v["exams"],
                               "date"=> date( 'Y-m-d', $phpdate ),
                               "time"=> date( 'H:i:s', $phpdate )
                              ];
        }
    }
 

    foreach ($arrPatientTot as $arrPatient) {
      $patient[$arrPatient['roomnumber']]=$arrPatient;
    }

    foreach ($arrRoom as $room) {

        $phpdate = strtotime($patient[$room['roomnumber']]['scheduled_departure']);
        $dateSchecDep = date( 'Y-m-d', $phpdate );
        $dateTime = date( 'H:i:s', $phpdate );
        
        $now = date('Y-m-d');
        $releasesTime=null;
        if($dateSchecDep==$now){//If it is the patient the day the patient will leave, DISPLAY IT.
            
            $releasesTime=$dateTime;            
        }
        else{
            $releasesTime="";
        }

   
        
        if($patient[$room['roomnumber']]["fk_type_nursing"]=="1"){            
            $totNA++;
        } 
        elseif ($patient[$room['roomnumber']]["fk_type_nursing"]=="2") {
            $totSoiInts++;
        } 
        elseif ($patient[$room['roomnumber']]["fk_type_nursing"]=="3") {            
            $totSoiIntd++;
        }
        
        $releases=null;
        $releases[]=["id"=>$patient[$room['roomnumber']]["fk_type_conge"],"time"=>$releasesTime];
        
        $roomsGenerated[$room['roomnumber']] = array(        
            "id" => $room['roomnumber'], // id de la chambre
            "number" => $room['roomnumber'], // numéro de la chambre
            "bed" => $patient[$room['roomnumber']]['nb_lit_hospitalier'], // numéro du lit
            "severity" => $patient[$room['roomnumber']]['fk_codevacuation'], // code sévérité ? ok
            "critical" => (int)$patient[$room['roomnumber']]['mouvement_alert'], // alerte critique
            //"isolation" => is_null($patient[$room['roomnumber']]['disp_isolement'])?false:true , // isolation du patient
            //"intermediate" => is_null($patient[$room['roomnumber']]['disp_type_nursing'])?false:true, // soins intermédiaires ? ok
            "isolation" => is_null($patient[$room['roomnumber']]['disp_isolement'])?"0":"1" , // isolation du patient
            "intermediate" => is_null($patient[$room['roomnumber']]['disp_type_nursing'])?"0":"1", // soins intermédiaires ? ok
            "toolLoad" => $patient[$room['roomnumber']]['fk_chargetravail'], // outil de charge
            "medicalTeam" => $patient[$room['roomnumber']]['disp_type_med'], // équipe médicale (Pédiatrie A, Pédiatrie B, Chirurgie)
            "patient" => $patient[$room['roomnumber']]['disp_name_patient'],
            "inspections" => $arrInspections[$patient[$room['roomnumber']]["paciente_session"]], // 
            "nurses" => $patient[$room['roomnumber']]["disp_name_nursing"] , // Infirmier/infirmières attitirée
            "releases" => $releases,
            "virtualroom"=>(int)$room['virtualroom']
        );
    }
   
    
    
    
    
    
    $stmt = $conn->prepare("SELECT pav.fk_type_med, pat.id, CONCAT(pat.last_name,' ',pat.first_name,'.') AS name FROM hsjsi.patron_type_med_availability AS pav
                            INNER JOIN patron AS pat
                            ON(pat.id=pav.fk_patron)
                            WHERE pat.status='1'
                            AND pav.status_at_work='1';");
    $stmt->execute();
    $arrRhPatr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($arrRhPatr as $k => $v) {
        if($v["fk_type_med"]=="1"){//Cardiac Surgery
            $arrCardS[]=[
                "id"=>$v["id"],
                "name"=>$v["name"]
            ];
        }
        elseif ($v["fk_type_med"]=="2") {        
    
            $arrPedA[]=[
                "id"=>$v["id"],
                "name"=>$v["name"]
            ];
        }
        else{        
    
            $arrPedB[]=[
                "id"=>$v["id"],
                "name"=>$v["name"]
            ];
        }
        
    }//End of foreach ($arrRhPatr as $k => $v) {
    
    
    
    
    //print_r($arrCardS);
    //print_r($arrPedA);
    //print_r($arrPedB);
    
        $arrResult=[
        "stats"=>[
            "Total"=>$totNA+$totSoiInts+$totSoiIntd,
            "Intensif"=>$totSoiInts,
            "Interm"=>$totSoiIntd
        ],
        "time" => date("Y-m-d H:i:s"),
        "dashBoardRH" => [
            "pedA"=>[
                "patron"=>$arrPatronPedA,
                "fellow"=>$arrFelPedA,
                "residents"=>$arrRes//Note: Igor. Residents must be an array of arrays. Can be more than 1 resident Igor
                    
            ],
            "pedB"=>[
                "patron"=>$arrPatronPedB,
                "fellow"=>$arrFelPedB
            ],
            "ChiC"=>[
                "patron"=>$arrPatronCC,
                "fellow"=>$arrFelCC
            ],
            "assistant"=>$arrAssist,
            "chefEquip"=>$arrChef,
            "inhalo"=>$arrinhalo,
            "agentSalub"=>$arragSalub,
            "pb"=>$arrPrepose,
            "pharmacien"=>$arrPharmaAvail,
            "agentAdmin"=>$arragentadminAvaill
        ],
        "rooms"=>$roomsGenerated
    ];
    
/*    
    $arrResult=[
        "stats"=>[
            "Total"=>$totNA+$totSoiInts+$totSoiIntd,
            "Intensif"=>$totSoiInts,
            "Interm"=>$totSoiIntd
        ],
        "time" => date("Y-m-d H:i:s"),
        "dashBoardRH" => [
            "pedA"=>[
                "patron"=>[
                    "id"=>$patPedAid,
                    "name"=>$patPedAName
                ],
                "fellow"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
                ],
                "residents"=>[//Note: Igor. Residents must be an array of arrays. Can be more than 1 resident Igor
                    "id"=>(int)3,
                    "name"=>"jhon"
                ]
            ],
            "pedB"=>[
                "patron"=>[
                    "id"=>$patPedBid,
                    "name"=>$patPedBName
                ],
                "fellow"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
                ]
            ],
            "ChiC"=>[
                "patron"=>[
                    "id"=>$patCCid,
                    "name"=>$patCCName
                ],
                "fellow"=>[
                   "id"=>(int)3,
                    "name"=>"jhon"
                ]
            ],
            "assistant"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ],
            "chefEquip"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ],
            "inhalo"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ],
            "agentSalub"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ],
            "pb"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ],
            "pharmacien"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ],
            "agentAdmin"=>[
                    "id"=>(int)3,
                    "name"=>"jhon"
            ]
        ],
        "rooms"=>$roomsGenerated
    ];
*/    
    
    
    //die();
    
/*    
    //final JSON
    $arrResult=[
        "stats"=>[
            "Total"=>"",
            "Intensif"=>"",
            "Interm"=>""
        ],
        "time" => date("Y-m-d H:i:s"),
        "dashBoardRH" => [
            "pedA"=>""
        ],
        "rooms"=>$roomsGenerated
    ];
*/    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $dtJSON = json_encode($arrResult);           
    echo "data: $dtJSON\n\n";
    
                        
    flush();
                        
} 
catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();
}
$conn = null;









?>