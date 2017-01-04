<?php
/**
 * Description of menu
 *
 * @author Igor Alves - igoralves1@gmail.com
 */

class db{
 
    private $dsn;
    private $username;
    private $password;
    private $db; 
    private $conn;
    private $sql;
    


    public function __construct() {          
         $this->dsn = "localhost";
         $this->username = "hsj";
         $this->password = "123";
         $this->db = "hsjsi";

         try {
                  $this->conn = new PDO("mysql:host=$this->dsn; dbname=$this->db", $this->username, $this->password);
                  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                  
         }// End of try
         catch(PDOException $e){
                  echo $e->getMessage();     
                  $this->conn = null;
                  die();
           }
    }
    public static function patientecurrentsatus_mouvement_alert($p_session) {
       try {               
               $db=new db();
               
               $db->sql = "SELECT mouvement_alert FROM patientecurrentsatus
                           WHERE paciente_session = '$p_session';";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                
                return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function list_patient($type=NULL) {//Default = JSON
       try {               
               $db=new db();
               
               $db->sql = "SELECT * FROM patient;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                
                
                if($type==NULL || $type=='JSON'){
                    return json_encode($result);
                }
                else{    
                    return print_r($result);
                }
                
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function insert_test(array $vals) {//Default = JSON
       try {    
/*           
               $db=new db();
               $var1=$db->conn->beginTransaction();               
               $var2=$$db->sql = "INSERT INTO userprivileges  (privileges) VALUES ('aa');";
               $var3=$$conn->exec($db->sql);
               $var4=$$db->conn->commit();            
               return "ok";
               
               //return $stmt = $db->conn->exec($db->sql); 
               //return $stmt = $db->conn->commit();
                               
*/                
                
            $conn = new PDO("mysql:host=localhost;dbname=hsjsi", "hsj", "123");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // begin the transaction
            $conn->beginTransaction();
            // our SQL statements
            $conn->exec("INSERT INTO userprivileges  (privileges) VALUES ('Scott');");

            // commit the transaction
            $conn->commit();       

           
       }// End of try
       catch(PDOException $e){
            //$db->conn->rollback();
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function update_patient_move(array $vals) {//Default = JSON
       try {    


                
            $conn = new PDO("mysql:host=localhost;dbname=hsjsi", "hsj", "123");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // begin the transaction
            $conn->beginTransaction();
            // our SQL statements
       
            $conn->exec("UPDATE patientecurrentsatus SET mouvement_alert = '{$vals["movement_alert"]}' 
                         WHERE roomnumber=(
                                SELECT roomnumber FROM room WHERE mac_addrss='{$vals["mac_addr"]}'
                         );");

            // commit the transaction
            $conn->commit();       

           
       }// End of try
       catch(PDOException $e){
            //$db->conn->rollback();
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
    
    public static function examstatus_type($type=NULL) {//Default = JSON
       try {               
               $db=new db();
               
               $db->sql = "SELECT * FROM examstatus_type;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                
                
                if($type==NULL || $type=='JSON'){
                    return json_encode($result);
                }
                else{    
                    return print_r($result);
                }
                
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function tournee_medicale_type($type=NULL) {//Default = JSON
       try {               
               $db=new db();
               
               $db->sql = "SELECT * FROM tournee_medicale_type;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                
                
                if($type==NULL || $type=='JSON'){
                    return json_encode($result);
                }
                else{    
                    return print_r($result);
                }
                
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function tournee_med_nursing_available_type($type=NULL) {//Default = JSON
       try {               
               $db=new db();
               
               $db->sql = "SELECT * FROM tournee_med_nursing_available_type;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                
                
                if($type==NULL || $type=='JSON'){
                    return json_encode($result);
                }
                else{    
                    return print_r($result);
                }
                
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function patron($type=NULL) {//Default = JSON
       try {               
               $db=new db();
               
               $db->sql = "SELECT * FROM patron;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                
                
                if($type==NULL || $type=='JSON'){
                    return json_encode($result);
                }
                else{    
                    return print_r($result);
                }
                
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
    
    //API
    public static function get_list($table,$displayType,$fields=NULL,$complement=NULL) {//Default = JSON
       try {               
               $db=new db();
               
               if(isset($fields) && isset($complement)){
                    $db->sql = "SELECT $fields FROM $table $complement;";                   
               }
               else{                   
                    $db->sql = "SELECT * FROM $table;";
               }
               
               //die($db->sql);
               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
               //die($displayType);
                
                if($displayType=="json"){
                    return json_encode($result);
                }
                else{    
                    return print_r($result);
                }
                
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
    
    public static function editRoomInfo($id) {//Default = JSON
       try {               
               $db=new db();
               
               $db->sql = "
                   
                    SELECT 
                        PAT.first_name,PAT.last_name,PAT.nb_dossier, 

                        PCS.roomnumber, PCS.nb_lit_hospitalier,PCS.fk_type_nursing,PCS.paciente_session,
                        PCS.fk_type_med,PCS.fk_isolement,PCS.fk_codevacuation,
                        PCS.fk_chargetravail,PCS.fk_type_assistance_respiratoire,
                        PCS.fk_nursing,PCS.fk_traitmentsparticuliers,PCS.fk_type_conge,PCS.scheduled_departure,PCS.mouvement_alert,


                        RCS.fk_statusroom, 
                        
                        RO.tel,
                        
                        RES.first_name AS residFistName, RES.fk_type AS resType,
                        
                        RST.description


                        FROM patientecurrentsatus AS PCS

                        INNER JOIN patient AS PAT
                        ON(PAT.id=PCS.fk_patient)

                        INNER JOIN room AS RO
                        ON(PCS.roomnumber=RO.roomnumber)

                        INNER JOIN roomcurrentstatus AS RCS
                        ON(RCS.fk_room=RO.id)

                        INNER JOIN resident AS RES
                        ON(RES.id=PCS.fk_resident)

                        INNER JOIN typeresident AS RST
                        ON(RST.id=RES.fk_type)

                    WHERE PCS.roomnumber = $id;
               
               ";
               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();   
               $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               $arr_PCS = $result[0]; //FROM patientecurrentsatus AS PCS
               
               
               if (count($arr_PCS)>0){
                   
                    $db->sql = "

                         Select 
                             ECS.fk_exam,
                             ECS.dt_requested,
                             ECS.fk_status_type

                             FROM examcurrentsession AS ECS

                             WHERE ECS.fk_session=\"{$arr_PCS["paciente_session"]}\"

                    ";
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();
                    $exams = $stmt->fetchAll(PDO::FETCH_NAMED);
                    
               }
               
           
                
                foreach ($exams as $ke => $ve) {
                    $dt=strtotime( $ve["dt_requested"] );
                    $sendValidated = FALSE;
                    if($ve["fk_status_type"]==1){
                        $sendValidated = TRUE;
                    }
                    $examsEnd[]=[
                        "id"        => $ve["fk_exam"],
                        "date"      => date( 'Y-m-d', $dt ),
                        "time"      => date( 'H:i:s', $dt ),
                        //"validated" => $ve["fk_status_type"]=="1"?(int)$ve["fk_status_type"]:0
                        "validated" => $sendValidated
                    ];

                }
              
                
         //Thi spart must be reDone. Like Exams. Must to create a intermediate table between conge and patientshistory        
         $fullDtConge =  strtotime( $arr_PCS["dt_requested"] );
         $dtConge     =  date( 'Y-m-d', $fullDtConge );
         $timeConge   =  date( 'H:i:s', $fullDtConge );
         $sendCritical = FALSE;
         if($arr_PCS["mouvement_alert"]==1){
             $sendCritical = TRUE;
         }
        
               
            $arrResult=[
                "roomId"=> $arr_PCS["roomnumber"],
                "roomStatusId"=> $arr_PCS["fk_statusroom"],
                "postNumber"=> $arr_PCS["tel"],
                "patient"=> [
                  "lastName"=> $arr_PCS["first_name"],
                  "firstName"=> $arr_PCS["last_name"],
                  "recordNumber"=> $arr_PCS["nb_dossier"]
                ],
                "bedNumber"=> $arr_PCS["nb_lit_hospitalier"],
                "typeNursingId"=> $arr_PCS["fk_type_nursing"],
                "medicalTeamId"=> $arr_PCS["fk_type_med"],
                "isolationId"=> $arr_PCS["fk_isolement"],
                "severityCodeId"=> $arr_PCS["fk_codevacuation"],
                "outilChargeId"=> $arr_PCS["fk_chargetravail"],
                "respiratoryId"=> $arr_PCS["fk_type_assistance_respiratoire"],
                "nurseId"=> $arr_PCS["fk_nursing"],
                "affectedResidents"=> [

                      "name"=> $arr_PCS["residFistName"],
                      "type"=> $arr_PCS["resType"]

                ],
                "specialTreatments"=> [
                      [
                      "id"=> $arr_PCS["fk_traitmentsparticuliers"]   
                      ]
                ],

                "inspections"=> $examsEnd,

                "releases"=> [
                    [0]=>[
                    "id"=> $arr_PCS["fk_type_conge"],
                    "date"=> $dtConge,
                    "time"=> $timeConge
                    ]
                ],    
                //"critical"=> (int)$arr_PCS["mouvement_alert"]   
                "critical"=>  $sendCritical
                    
            ];                
            echo json_encode($arrResult);
            die();
            return  json_encode($arrResult);

                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function getDashboardInfo($id) {//Default = JSON
       try {               
               $db=new db();
               
               //$db->sql = "";
               
               //$stmt = $db->conn->prepare($db->sql); 
               //$stmt->execute();   
               //$result = $stmt->fetchAll(PDO::FETCH_NAMED);
               
               
               //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
                

                //Patron
                //$stmt = $conn->prepare("SELECT fk_type_med,fk_patron,patron_name_concatenated FROM patron_type_med_availability WHERE status_at_work=1;");  
                $db->sql = "SELECT fk_type_med,fk_patron,patron_name_concatenated FROM patron_type_med_availability WHERE status_at_work=1;";
                $stmt = $db->conn->prepare($db->sql);               
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
                //$stmt = $conn->prepare("SELECT fk_type_med,fk_fellow,fellow_name_concatenated FROM fellow_type_med_availability WHERE status_at_work=1;");  
                $db->sql = "SELECT fk_type_med,fk_fellow,fellow_name_concatenated FROM fellow_type_med_availability WHERE status_at_work=1;";
                $stmt = $db->conn->prepare($db->sql); 
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
                //$stmt = $conn->prepare("SELECT fk_resident,disp_name FROM resident_current_status WHERE status_at_work=1;"); 
                $db->sql = "SELECT fk_resident,disp_name FROM resident_current_status WHERE status_at_work=1 ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $residentAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($residentAvail as $v) {

                        $arrRes[]=[
                            "id"=>$v["fk_resident"],
                            "name"=>$v["disp_name"]
                        ];


                }


                //Assistent
                //$stmt = $conn->prepare("SELECT fk_assistant,disp_name FROM assistant_current_status WHERE status_at_work='1';");    
                $db->sql = "SELECT fk_assistant,disp_name FROM assistant_current_status WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $assistAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($assistAvail as $v) {

                        $arrAssist[]=[
                            "id"=>$v["fk_assistant"],
                            "name"=>$v["disp_name"]
                        ];


                }


                //Assistent
                //$stmt = $conn->prepare("SELECT fk_assistant,disp_name FROM assistant_current_status  WHERE status_at_work='1';");  
                $db->sql = "SELECT fk_assistant,disp_name FROM assistant_current_status  WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $assistAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($assistAvail as $v) {

                        $arrAssist[]=[
                            "id"=>$v["fk_assistant"],
                            "name"=>$v["disp_name"]
                        ];
                }

                //Chef
                //$stmt = $conn->prepare("SELECT fk_chefeequipe,disp_name FROM chefeequipe_current_status WHERE status_at_work='1';");
                $db->sql = "SELECT fk_chefeequipe,disp_name FROM chefeequipe_current_status WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $cheftAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($cheftAvail as $v) {

                        $arrChef[]=[
                            "id"=>$v["fk_chefeequipe"],
                            "name"=>$v["disp_name"]
                        ];
                }


                //inhalotherapeute
                //$stmt = $conn->prepare("SELECT fk_inhalo,disp_name FROM inhalo_current_status WHERE status_at_work='1';");
                $db->sql = "SELECT fk_inhalo,disp_name FROM inhalo_current_status WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $inhaloAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($inhaloAvail as $v) {

                        $arrinhalo[]=[
                            "id"=>$v["fk_inhalo"],
                            "name"=>$v["disp_name"]
                        ];
                }


                //agentsalubrite
                //$stmt = $conn->prepare("SELECT fk_agentsalubrite,disp_name FROM agentsalubrite_current_status WHERE status_at_work='1';");
                $db->sql = "SELECT fk_agentsalubrite,disp_name FROM agentsalubrite_current_status WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $agSalubAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($agSalubAvail as $v) {

                        $arragSalub[]=[
                            "id"=>$v["fk_agentsalubrite"],
                            "name"=>$v["disp_name"]
                        ];
                }

                //prepose
                //$stmt = $conn->prepare("SELECT fk_prepose,disp_name FROM prepose_current_status WHERE status_at_work='1';"); 
                $db->sql = "SELECT fk_prepose,disp_name FROM prepose_current_status WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $preposeAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($preposeAvail as $v) {

                        $arrPrepose[]=[
                            "id"=>$v["fk_prepose"],
                            "name"=>$v["disp_name"]
                        ];
                }


                //pharmacist
                //$stmt = $conn->prepare("SELECT fk_pharmacist,disp_name FROM pharmacist_current_status WHERE status_at_work='1';");    
                $db->sql = "SELECT fk_pharmacist,disp_name FROM pharmacist_current_status WHERE status_at_work='1' ;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $pharmaAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($pharmaAvail as $v) {

                        $arrPharmaAvail[]=[
                            "id"=>$v["fk_pharmacist"],
                            "name"=>$v["disp_name"]
                        ];
                }

                //agentadmin
                //$stmt = $conn->prepare("SELECT fk_agentadmin,disp_name FROM agentadmin_current_status  WHERE status_at_work='1';");   
                $db->sql = "SELECT fk_agentadmin,disp_name FROM agentadmin_current_status  WHERE status_at_work='1' ;";
//                $db->sql = "SELECT id AS fk_agentadmin, CONCAT(first_name,' ',last_name,'.') AS disp_name 
//                            FROM agentadmin;";
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute();
                $agentadminAvail = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                foreach ($agentadminAvail as $v) {

                        $arragentadminAvaill[]=[
                            "id"=>$v["fk_agentadmin"],
                            "name"=>$v["disp_name"]
                        ];
                }
               
               
               
               
               
        /* 
               $arrResult=[
       
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
                    ]
                ];
               
            */
               
            $arrResult= array(
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
                    
            );    
                
            //echo json_encode($arrResult);
            //die();
            return  json_encode($arrResult);

                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
    public static function patientChangeRoom( $vals) {//array $vals should contain $idRoomFrom and $idRoomTo
       try {    

            $db=new db();
            $conn=$db->conn;
            //$conn = new PDO("mysql:host=localhost;dbname=hsjsi", "hsj", "123");
            //set the PDO error mode to exception
            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            
            // begin the transaction
            $conn->beginTransaction();
            // our SQL statements
       
            $conn->exec("UPDATE patientecurrentsatus SET roomnumber = '{$vals["idRoomTo"]}' 
                         WHERE roomnumber='{$vals["idRoomFrom"]}';");

            // commit the transaction
            $conn->commit();       

           
       }// End of try
       catch(PDOException $e){
            //$db->conn->rollback();
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
    
    //Save in history    
    public static function post_save_patientecurrentsatus_history($idRoom) {//array $vals should contain $idRoomFrom and $idRoomTo
       try {    

           
            $db=new db();  
            $conn=$db->conn;  
            
            
            
            // begin the transaction
            $conn->beginTransaction();
            
       
            $conn->exec("INSERT INTO patientecurrentsatus_history 
                            (fk_patient, disp_name_patient, paciente_session, fk_exam_status_type, 
                            disp_exam_status_type, dt_sys_admission, fk_tournee_medicale_fait, 
                            disp_tournee_medicale_fait, fk_tournee_med_nursing_available, 
                            disp_tournee_nursing_available, fk_patron, disp_name_patron, 
                            fk_type_med, disp_type_med, fk_fellow, disp_name_fellow, fk_nursing, 
                            disp_name_nursing, fk_pharmacist, roomnumber, disp_name_pharmacist, 
                            fk_resident, disp_name_resident, fk_type_nursing, disp_type_nursing, 
                            fk_type_assistance_respiratoire, disp_type_assistance_respiratoire, 
                            fk_isolement, disp_isolement, fk_codevacuation, fk_chargetravail, 
                            fk_traitmentsparticuliers, disp_traitmentsparticuliers, fk_deplacementcritique, 
                            disp_deplacementcritique, note, scheduled_departure, performed_departure, 
                            nb_lit_hospitalier, mouvement_alert, codevacuation_hexacode, 
                            traitmentsparticuliers_hexacode, mouvement_alert_path, 
                            fk_type_conge, disp_type_conge, disp_type_conge_hexacode)
                            SELECT 
                            fk_patient, disp_name_patient, paciente_session, fk_exam_status_type, 
                            disp_exam_status_type, dt_sys_admission, fk_tournee_medicale_fait, 
                            disp_tournee_medicale_fait, fk_tournee_med_nursing_available, 
                            disp_tournee_nursing_available, fk_patron, disp_name_patron, 
                            fk_type_med, disp_type_med, fk_fellow, disp_name_fellow, fk_nursing, 
                            disp_name_nursing, fk_pharmacist, roomnumber, disp_name_pharmacist, 
                            fk_resident, disp_name_resident, fk_type_nursing, disp_type_nursing, 
                            fk_type_assistance_respiratoire, disp_type_assistance_respiratoire, 
                            fk_isolement, disp_isolement, fk_codevacuation, fk_chargetravail, 
                            fk_traitmentsparticuliers, disp_traitmentsparticuliers, fk_deplacementcritique, 
                            disp_deplacementcritique, note, scheduled_departure, performed_departure, 
                            nb_lit_hospitalier, mouvement_alert, codevacuation_hexacode, 
                            traitmentsparticuliers_hexacode, mouvement_alert_path, 
                            fk_type_conge, disp_type_conge, disp_type_conge_hexacode
                            FROM patientecurrentsatus PST
                            WHERE PST.roomnumber='{$idRoom}';");

            // commit the transaction
            $conn->commit();       

           
       }// End of try
       catch(PDOException $e){
            //$db->conn->rollback();
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function post_save_examcurrentsession_history($fk_session) {//array $vals should contain $idRoomFrom and $idRoomTo
       try {    


                
            $conn = new PDO("mysql:host=localhost;dbname=hsjsi", "hsj", "123");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // begin the transaction
            $conn->beginTransaction();
            // our SQL statements
       
            $conn->exec("INSERT INTO examcurrentsession_history 
                            (fk_exam, fk_session, dt_requested, dt_prevu, dt_finished, fk_status_type, note, dt_sys)
                            SELECT
                            fk_exam, fk_session, dt_requested, dt_prevu, dt_finished, fk_status_type, note, dt_sys
                            FROM examcurrentsession ECS
                            WHERE ECS.fk_session='{$fk_session}';");

            // commit the transaction
            $conn->commit();       

           
       }// End of try
       catch(PDOException $e){
            //$db->conn->rollback();
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    
    
    
    //DEV tool
    public static function get_infoschema() {
       try {               
               $db=new db();
               
               $db->sql = "SHOW TABLES;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
              
               
                $tbls = $stmt->fetchAll(PDO::FETCH_NAMED);
                $str="";
                foreach ($tbls as $key => $value) {
                    
                    //$str.= "<h1>".$value['Tables_in_hsjsi']."</h1><br/>";
                    $db->sql = "SELECT * FROM {$value['Tables_in_hsjsi']};";
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();                    
                    $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                    $i++;
                    $k="<h1>".$i."-".$value['Tables_in_hsjsi']."</h1>";
                    $arrTot[$k]=$result;
//                    $str.="<pre>";
//                    $str.= print_r($result);
//                    $str.="<pre/>";
                }
                //return print_r($tbls);
                return $arrTot;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
    //DEV tool
    public static function update_RH($rhType, $id) {
       try {               
               $db=new db();
               
               
               $arrrhType=[
                   "chefeunite"=>"chefeunite_current_status",
                   "prepose"=>"prepose_current_status",
                   "chefeequipe"=>"chefeequipe_current_status",
                   "inhalotherapeute"=>"inhalo_current_status",
                   "assistant"=>"assistant_current_status",
                   "agentadmin"=>"agentadmin_current_status",
                   "patron"=>"patron_type_med_availability",
                   "fellow"=>"fellow_type_med_availability",
                   "nursing"=>"nursing_current_status",
                   "pharmacist"=>"pharmacist_current_status",
                   "resident"=>"resident_current_status",
                   "agentsalubrite"=>"agentsalubrite_current_status"
               ];
               
               $db->sql = "SELECT * FROM {$rhType} WHERE id={$id};";               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
            
               
                $tbls = $stmt->fetchAll(PDO::FETCH_NAMED);
                $str="";
                foreach ($tbls as $key => $value) {
                    
                    //$str.= "<h1>".$value['Tables_in_hsjsi']."</h1><br/>";
                    $db->sql = "SELECT * FROM {$value['Tables_in_hsjsi']};";
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();                    
                    $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                    $i++;
                    $k="<h1>".$i."-".$value['Tables_in_hsjsi']."</h1>";
                    $arrTot[$k]=$result;
//                    $str.="<pre>";
//                    $str.= print_r($result);
//                    $str.="<pre/>";
                }
                //return print_r($tbls);
                return $arrTot;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    ///api/v1/POST/updateDashboardInfo.php
    
    
    //Resident
    public static function update_Resident($arrResidents,$typMed=2,$arrResidentsType=NUll) {
       try {               
          
               $arrTypeMed=[
                            "1"=>"C",
                            "2"=>"A",
                            "3"=>"B"
                           ];
               $type_med_type=$arrTypeMed[$typMed];
               $db=new db();   
               //Set all rows to status_at_work='0'
               $conn=$db->conn; 
               
               $conn->beginTransaction();
               $conn->exec("Update resident_current_status
                             SET status_at_work='0';");
               $res1=$conn->commit();
               
               
               foreach ($arrResidents as $k => $v) {
                    //fk_type =1 Front end not alow resident type
                    if(!empty($v)){
                            $arrName = explode(" ", $v);
                            $firstName = $arrName[0];
                            $last_name = $arrName[1];
                            $dispName  = $firstName." ".$last_name.".";


                            $conn->beginTransaction();
                            $sql = "INSERT INTO resident (first_name, last_name, fk_type, status, dt_sys, tel)
                                    VALUES 
                                    ('{$firstName}','{$last_name}','1','1',NOW(), '223')";
                            $conn->exec($sql);       
                            $id = $conn->lastInsertId(); 
                            $res2=$conn->commit();



                            $conn->beginTransaction();               
                            $sql = "INSERT INTO resident_current_status (fk_resident, disp_name, dt_sys, status_at_work) 
                                    VALUES
                                    ('{$id}', '{$dispName}', NOW(), '1');";                        
                            $conn->exec($sql); 
                            $res2=$conn->commit();
                            $dispName=null;
                   }
               }
               
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    //Patron
    public static function update_Patron($typMed,$arrVal) {
       try {               
           
               $arrTypeMed=[
                            "1"=>"C",
                            "2"=>"A",
                            "3"=>"B"
                           ];
               $type_med_type=$arrTypeMed[$typMed];
               $db=new db();   
             
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn; 
               
               $conn->beginTransaction();
               $conn->exec("Update patron_type_med_availability
                             SET status_at_work='0'
                             WHERE fk_type_med={$typMed};");
               $res1=$conn->commit();

             
               if(!is_null($arrVal["other"])&& !empty($arrVal["other"])){
                    $arrName = explode(" ", $arrVal["other"]);
                    $firstName = $arrName[0];
                    $last_name = $arrName[1];
                    $dispName  = $firstName." ".$last_name.".";
                    
                    $conn->beginTransaction();
                    $sql = "INSERT INTO patron (first_name,last_name, status, dt_sys)
                            VALUES 
                            ('{$firstName}','{$last_name}','1',NOW())";
                    $conn->exec($sql);       
                    $id = $conn->lastInsertId(); 
                    $res2=$conn->commit();
                     
                    
                    
                    $conn->beginTransaction();               
                    $sql = "INSERT INTO patron_type_med_availability (dt_current, fk_patron, fk_type_med, patron_name_concatenated, type_med_type, status_at_work)
                            VALUES
                            (NOW(),'{$id}',{$typMed}, '{$dispName}','{$type_med_type}',  '1');";  
                    $conn->exec($sql); 
                    $res2=$conn->commit(); 
                     
               }
               else{
                   foreach ($arrVal as $k => $v) {
                       if(!($k==="other")){
                           
                            $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                        FROM patron
                                        WHERE id={$v};";               
                            $stmt = $db->conn->prepare($db->sql); 
                            $stmt->execute(); 
                            
                            $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                            $conn->beginTransaction();               
                            $sql = "INSERT INTO patron_type_med_availability (dt_current, fk_patron, fk_type_med, patron_name_concatenated, type_med_type, status_at_work)
                                    VALUES
                                    (NOW(),'{$v}','{$typMed}', '{$name[0]["disp_name"]}','{$type_med_type}',  '1');";                        
                            $conn->exec($sql); 
                            $res2=$conn->commit();   
                       }
                   }
               }
               
               
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    //Fellow
    public static function update_Fellow($typMed,$arrVal) {
       try {               
           
               $arrTypeMed=[
                            "1"=>"C",
                            "2"=>"A",
                            "3"=>"B"
                           ];
               $type_med_type=$arrTypeMed[$typMed];
               $db=new db();   
             
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn; 
               
               $conn->beginTransaction();
               $conn->exec("Update fellow_type_med_availability
                             SET status_at_work='0'
                             WHERE fk_type_med={$typMed};");
               $res1=$conn->commit();

            
               if(!is_null($arrVal["other"])&& !empty($arrVal["other"])){
                    $arrName = explode(" ", $arrVal["other"]);
                    $firstName = $arrName[0];
                    $last_name = $arrName[1];
                    $dispName  = $firstName." ".$last_name.".";
                    
                    $conn->beginTransaction();
                    $sql = "INSERT INTO fellow (first_name, last_name, status, dt_sys)
                            VALUES 
                            ('{$firstName}','{$last_name}','1',NOW())";
                            
                    $conn->exec($sql);       
                    $id = $conn->lastInsertId(); 
                    $res2=$conn->commit();
                     
                    
                    
                    $conn->beginTransaction();               
                    $sql = "INSERT INTO fellow_type_med_availability (dt_current, fk_type_med, fk_fellow, fellow_name_concatenated, type_med_type, status_at_work)
                            VALUES
                            (NOW(),{$typMed},'{$id}', '{$dispName}','{$type_med_type}',  '1');";                        
                    $conn->exec($sql); 
                    $res2=$conn->commit(); 
                     
               }
               else{
                   foreach ($arrVal as $k => $v) {
                       if(!($k==="other")){
                           
                            $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                        FROM fellow
                                        WHERE id={$v};";               
                            $stmt = $db->conn->prepare($db->sql); 
                            $stmt->execute(); 
                            
                            $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                            $conn->beginTransaction();               
                            $sql = "INSERT INTO fellow_type_med_availability (dt_current, fk_type_med, fk_fellow, fellow_name_concatenated, type_med_type, status_at_work)
                                    VALUES
                                    (NOW(),{$typMed},'{$v}', '{$name[0]["disp_name"]}','{$type_med_type}',  '1');";                        
                            $conn->exec($sql); 
                            $res2=$conn->commit();   
                       }
                   }
               }
               
               
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    //assistant
    public static function update_assistant($id) {
       try {               
               $db=new db();   
            
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();

               $conn->exec("Update assistant_current_status
                            SET status_at_work='0';");
               $res1=$conn->commit();
               
               
               //$db->sql = "SELECT DISTINCT( disp_name ) FROM agentadmin_current_status WHERE fk_agentadmin = '{$fk_agentadmin}';";               
               $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                           FROM assistant
                           WHERE id={$id};";               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
             
               
               $name = $stmt->fetchAll(PDO::FETCH_NAMED);
               
               
               $conn->beginTransaction();               
               $sql = "INSERT INTO assistant_current_status (fk_assistant, disp_name, dt_sys, status_at_work)
                       VALUES
                       ('{$id}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                $conn->exec($sql);         
                
                $id = $conn->lastInsertId(); 
                $res2=$conn->commit();
                          
                
                
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    //ChefEquip
    public static function update_ChefEquip($arrVal) {
       try {               
               $db=new db();   
            
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn; 
               
               $conn->beginTransaction();
               $conn->exec("Update chefeequipe_current_status
                             SET status_at_work='0';");
               $res1=$conn->commit();

               
               if(!is_null($arrVal["other"])&& !empty($arrVal["other"])){
                    $arrName = explode(" ", $arrVal["other"]);
                    $firstName = $arrName[0];
                    $last_name = $arrName[1];
                    $dispName  = $firstName." ".$last_name.".";
                    
                    $conn->beginTransaction();
                    $sql = "INSERT INTO chefeequipe (first_name, last_name, status, dt_sys) 
                            VALUES 
                            ('{$firstName}','{$last_name}','1',NOW())";

                    $conn->exec($sql);       
                    $id = $conn->lastInsertId(); 
                    $res2=$conn->commit();
                     
                    
                    
                    $conn->beginTransaction();               
                    $sql = "INSERT INTO chefeequipe_current_status (fk_chefeequipe, disp_name, dt_sys, status_at_work)
                            VALUES
                            ('{$id}', '{$dispName}', NOW(), '1');";                        
                    $conn->exec($sql); 
                    $res2=$conn->commit(); 
                     
               }
               else{
                   foreach ($arrVal as $k => $v) {
                       if(!($k==="other")){
                            $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                        FROM chefeequipe
                                        WHERE id={$v};";               
                            $stmt = $db->conn->prepare($db->sql); 
                            $stmt->execute(); 
                            
                            $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                            $conn->beginTransaction();               
                            $sql = "INSERT INTO chefeequipe_current_status (fk_chefeequipe, disp_name, dt_sys, status_at_work)
                                    VALUES
                                    ('{$v}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                             $conn->exec($sql);         

                             $id = $conn->lastInsertId(); 
                             $res2=$conn->commit();   
                       }
                   }
               }
               
               
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }  
    //Chefeunite
    public static function update_Chefeunite($id) {
       try {               
                $db=new db();   
                //Set all rows to status_at_work='0'
                $conn=$db->conn; 
                $conn->beginTransaction();
                
                $conn->exec("Update chefeunite_current_status
                              SET status_at_work='0';");
                $res1=$conn->commit();

                $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                            FROM chefeunite
                            WHERE id={$id};";               
                $stmt = $db->conn->prepare($db->sql); 
                $stmt->execute(); 

                $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                $conn->beginTransaction();               
                $sql = "INSERT INTO chefeunite_current_status (fk_chefeunite, disp_name, dt_sys, status_at_work) 
                        VALUES
                        ('{$id}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                $conn->exec($sql);         

                $lid = $conn->lastInsertId(); 
                $conn->commit(); 
                return $lid;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }  
    //inhalotherapeute
    public static function update_Inhalotherapeute($arrVal) {
       try {               
               $db=new db();   
               
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn; 
               
               $conn->beginTransaction();
               $conn->exec("Update inhalo_current_status
                             SET status_at_work='0';");
               $res1=$conn->commit();

               
               if(!is_null($arrVal["other"])&& !empty($arrVal["other"])){
                    $arrName = explode(" ", $arrVal["other"]);
                    $firstName = $arrName[0];
                    $last_name = $arrName[1];
                    $dispName  = $firstName." ".$last_name.".";
                    
                    $conn->beginTransaction();
                    $sql = "INSERT INTO inhalotherapeute (first_name, last_name, status, dt_sys)
                            VALUES 
                            ('{$firstName}','{$last_name}','1',NOW())";

                    $conn->exec($sql);       
                    $id = $conn->lastInsertId(); 
                    $res2=$conn->commit();
                     
                    
                    
                    $conn->beginTransaction();               
                    $sql = "INSERT INTO inhalo_current_status (fk_inhalo, disp_name, dt_sys, status_at_work)
                            VALUES
                            ('{$id}', '{$dispName}', NOW(), '1');";                        
                    $conn->exec($sql); 
                    $res2=$conn->commit(); 
                     
               }
               else{
                   foreach ($arrVal as $k => $v) {
                       if(!($k==="other")){
                            $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                        FROM inhalotherapeute
                                        WHERE id={$v};";               
                            $stmt = $db->conn->prepare($db->sql); 
                            $stmt->execute(); 
                            
                            $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                            $conn->beginTransaction();               
                            $sql = "INSERT INTO inhalo_current_status (fk_inhalo, disp_name, dt_sys, status_at_work)
                                    VALUES
                                    ('{$v}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                             $conn->exec($sql);         

                             $id = $conn->lastInsertId(); 
                             $res2=$conn->commit();   
                       }
                   }
               }
               
               
               return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    //prepose
    public static function update_prepose($arrId) {
       try {               
               $db=new db();   
             
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               //Must set all to status_at_work='0'. Scenario where we are changing the user

               
               $conn->exec("Update prepose_current_status
                            SET status_at_work='0';");
               $res1=$conn->commit();
               
               
               
               foreach ($arrId as  $id) {
                   
                    $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                FROM prepose
                                WHERE id={$id};";               
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();

                    

                    $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                    $conn->beginTransaction();               
                    $sql = "INSERT INTO prepose_current_status (fk_prepose, disp_name, dt_sys, status_at_work)
                            VALUES
                            ('{$id}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                     $conn->exec($sql);         

                     $id = $conn->lastInsertId(); 
                     $res2=$conn->commit();   
                   
                   
                   
               }//End of foreach ($arrId as
               
                
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    //pharmacist
    public static function update_pharmacist($arrId) {
       try {               
               $db=new db();   
           
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               //Must set all to status_at_work='0'. Scenario where we are changing the user

               
               $conn->exec("Update pharmacist_current_status
                            SET status_at_work='0';");
               $res1=$conn->commit();
               
               
               
               foreach ($arrId as  $id) {
                   
                    $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                FROM pharmacist
                                WHERE id={$id};";               
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();

                    

                    $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                    $conn->beginTransaction();               
                    $sql = "INSERT INTO pharmacist_current_status (fk_pharmacist, disp_name, dt_sys, status_at_work)
                            VALUES
                            ('{$id}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                     $conn->exec($sql);         

                     $id = $conn->lastInsertId(); 
                     $res2=$conn->commit();   
                   
                   
                   
               }//End of foreach ($arrId as
               
                
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    //agentsalubrite
    public static function update_agentsalubrite($arrId) {
       try {               
               $db=new db();   
          
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               //Must set all to status_at_work='0'. Scenario where we are changing the user

               
               $conn->exec("Update agentsalubrite_current_status
                            SET status_at_work='0';");
               $res1=$conn->commit();
               
               
               
               foreach ($arrId as  $fk_agentsalubrite) {
                   
                    $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                FROM agentsalubrite
                                WHERE id={$fk_agentsalubrite};";               
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();

                    

                    $name = $stmt->fetchAll(PDO::FETCH_NAMED);


                    $conn->beginTransaction();               
                    $sql = "INSERT INTO agentsalubrite_current_status (fk_agentsalubrite, disp_name, dt_sys, status_at_work)
                            VALUES
                            ('{$fk_agentsalubrite}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                     $conn->exec($sql);         

                     $id = $conn->lastInsertId(); 
                     $res2=$conn->commit();   
                   
                   
                   
               }//End of foreach ($arrId as
               
                
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }     
    //update_agentadmin
    public static function update_agentadmin($fk_agentadmin) {
       try {               
               $db=new db();   
         
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               //Must set all to status_at_work='0'. Scenario where we are changing the user
//               $conn->exec("Update agentadmin_current_status
//                            SET status_at_work='0'
//                            WHERE fk_agentadmin={$fk_agentadmin};");
               $conn->exec("Update agentadmin_current_status
                            SET status_at_work='0';");
               $res1=$conn->commit();
               
               
               //$db->sql = "SELECT DISTINCT( disp_name ) FROM agentadmin_current_status WHERE fk_agentadmin = '{$fk_agentadmin}';";               
               $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                           FROM agentadmin
                           WHERE id={$fk_agentadmin};";               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
         
               
               $name = $stmt->fetchAll(PDO::FETCH_NAMED);
               
               
               $conn->beginTransaction();               
               $sql = "INSERT INTO agentadmin_current_status (fk_agentadmin, disp_name, dt_sys, status_at_work)
                       VALUES
                       ('{$fk_agentadmin}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                $conn->exec($sql);         
                
                $id = $conn->lastInsertId(); 
                $res2=$conn->commit();
                          
                
                
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    //nursing
    public static function update_nursing($arrId) {
       try {               
               $db=new db();   
            
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();

               $conn->exec("Update nursing_current_status
                            SET status_at_work='0';");
               $res1=$conn->commit();
               
               foreach ($arrId as $id) {
                            
                    $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                FROM nursing
                                WHERE id={$id};";               
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();

                    $name = $stmt->fetchAll(PDO::FETCH_NAMED);
                    
                    $conn->beginTransaction();               
                    $sql = "INSERT INTO assistant_current_status (fk_assistant, disp_name, dt_sys, status_at_work)
                            VALUES
                            ('{$id}', '{$name[0]["disp_name"]}', NOW(), '1');";                        
                     $conn->exec($sql);         

                     $id = $conn->lastInsertId(); 
                     $res2=$conn->commit();
                
                }          
                
                
                return $id;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    
   
    public static function delete_patientecurrentsatus($paciente_session) {
       try {       
           
               
               $db=new db();   
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               $conn->exec("DELETE FROM patientecurrentsatus 
                            WHERE paciente_session='{$paciente_session}';");
               $res1=$conn->commit();
               
                
                return $res1;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function delete_examcurrentsession($fk_session) {
       try {       
           
               
               $db=new db();   
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               $conn->exec("DELETE FROM examcurrentsession
                            WHERE fk_session ='{$fk_session}';");
               $res1=$conn->commit();
               
                
                return $res1;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function update_roomcurrentstatus($idRoom,$idstatusroom) {
       try {       
           
               
               $db=new db();   
               
               //Set all rows to status_at_work='0'
               $conn=$db->conn;            
               $conn->beginTransaction();
               $conn->exec("UPDATE roomcurrentstatus SET fk_statusroom = '{$idstatusroom}'
                               WHERE fk_room ='{$idRoom}';");
               $res1=$conn->commit();
               
                
                return $res1;
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    
    public static function update_PatientInfo($jsonInfo) {
       try {               
           //echo "Print a JSON ==>";
           //print_r($jsonInfo);
           //cho "<br>";
           $arrData=json_decode($jsonInfo, true); 
           //die(print_r($arrData));
           //echo "Print an Array ==>";
           //die(print_r($arrData));
           
           $roomStatusId=           $arrData["roomStatusId"];
           $roomId=                 $arrData["roomId"];
           $patient_recordNumber=   $arrData["patient"]["recordNumber"];
           //die($jsonInfo);
//           echo("test");
//           echo($roomStatusId);
//           die(print_r($arrData));
           
           //This is the processus to delete the patient.
           //This is a poor code. Must to be changed
           if($roomStatusId=="1"){//If $roomStatusId=="1" The process will be to RELEASE THE PATIENT. THE PATINET HAS FINISHED WITH THE INTENSIVE CARE
               //IF $roomStatusId=="1" is because the user want to delete the relationship patient X room
               //die("Dlete user relacao");
              
               $db=new db(); 
               $conn=$db->conn; 
               $db->sql = "SELECT paciente_session FROM patientecurrentsatus WHERE fk_patient = (SELECT id FROM patient WHERE nb_dossier = '{$patient_recordNumber}');";               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               $arrPacInfo = $stmt->fetchAll(PDO::FETCH_NAMED);
               $paciente_session=$arrPacInfo[0]["paciente_session"]; 
               //die($paciente_session);
               //This process will delete a row 
               self::post_save_examcurrentsession_history($paciente_session); 
               //die("saved in examcurrentsession_history ");
               //die($roomId);
               //parei aqui
               
               //die("save_examcurrentsession_history --- ok ");               
               self::post_save_patientecurrentsatus_history($roomId);
               
               
               self::delete_examcurrentsession($paciente_session);               
               self::delete_patientecurrentsatus($paciente_session);
               
               //Status 1 = disponile
               self::update_roomcurrentstatus($roomId, 1);
               //die("saved in patientecurrentsatus_history  --- ok ");
               //Deelete from examcurrentsession
               //Deelete from patientecurrentsatus
                   
           }
           else {
           
           
          
           
           //die("Insert/Update room");
           
           
           
           
           
           $patient_lastName=       $arrData["patient"]["lastName"];
           $patient_firstName=      $arrData["patient"]["firstName"];
           
           
           //This will not change in a UPDATE scenario
                      
           
           $postNumber=             $arrData["postNumber"];
           
           
           $bedNumber=              $arrData["bedNumber"];
           $typeNursingId=          $arrData["typeNursingId"];
           $medicalTeamId=          $arrData["medicalTeamId"];
           $isolationId=            $arrData["isolationId"];
           $severityCodeId=         $arrData["severityCodeId"];
           $outilChargeId=          $arrData["outilChargeId"];
           $respiratoryId=          $arrData["respiratoryId"];
           $nurseId=                $arrData["nurseId"];
           
           
           $arrAffectedResidents=   $arrData["affectedResidents"];//Array  
           
           //NOTE The database only accepts 1 traitements_particuliers. Must to solve this later. 
           //For now we will insert only the first one.
           //Array is sent we will grab the first one. Must to test.
           $arrSpecialTreatments=   $arrData["specialTreatments"];//Array
           
           $traitmentsparticuliersId=$arrSpecialTreatments[0]["id"];
//           $traitmentsparticuliers=$arrSpecialTreatments[0]["date"];
//           $traitmentsparticuliers=$arrSpecialTreatments[0]["time"];
           
           //tem que inserir os campos de data e time para conge
           
           //Must be inserted in the table exams, examcurrentsession,,,, Must grab paciente_session
           $arrInspections=         $arrData["inspections"];//Array  
          
           //Must redesign  databse for this process.
           if(count($arrData["releases"])>0){//When there is something in the array releases
               
                //die("entrou no if");
                //NOte: Databse wil only accept 1 release. We must to save info into patientecurrentsatus_history
                //each time we change the release type or status. The front end will send me only 1. ALready discussed...with Michael et Marouane
                $arrReleases =         $arrData["releases"];//Array  
                $fk_type_conge =       $arrReleases[0]["id"];
                //$scheduled_departure = $arrReleases[0]["date"];//Marouane will send like "2016-11-28 12:37:02"
                $scheduled_departure = $arrReleases[0]["dateTime"];//Marouane will send like "2016-11-28 12:37:02"
                //$arrDate  = explode($delimiter, $arrReleases[0]["date"]);
                //$fk_type_conge  = $arrReleases[0]["id"];
           }
           else{
               //echo "entra aqui";
               $fk_type_conge =1;
               $scheduled_departure="2000-01-01 12:00:00";
           }
           
           
           
//           echo 'test arrTypeConge $arrData["releases"] ====';
//           echo 'test arrTypeConge $arrReleases ====';
//           
//           print_r($arrReleases);
//           print_r($arrData);
//           
//           
//           echo $fk_type_conge;
//           echo $scheduled_departure;
//           
//           die();
           
           
           
           $critical=$arrData["critical"];
           $critical==true?$alert='1':$alert='0';
           
           //Insert a new patient if it not exists
           $db=new db();   
           //Set all rows to status_at_work='0'
           $conn=$db->conn;  
           
           //Grab some patiente info, using the provided $patient_recordNumber
           //$patient_recordNumber="df745646";//This is FAKE (RETURN PATIENT 3 FOR TEST PROUPPOSE) ---> delete depois
           
          
           $db->sql = "SELECT id,first_name,last_name FROM patient WHERE nb_dossier = '{$patient_recordNumber}';";   
           //echo "sql==>".$db->sql;
           //echo "<br>";
           //echo "<br>";
           //echo "<br>";
           $stmt = $db->conn->prepare($db->sql); 
           $stmt->execute();
           $arrPacInfo = $stmt->fetchAll(PDO::FETCH_NAMED);
           //echo 'Debugging => The follow array should be empt since the $patient_recordNumber = {$patient_recordNumber} do not exits in the databse';
           //die(print_r($arrPacInfo));
           if(count($arrPacInfo)>0){//The user Exists in the databse ==> Update info inside table patientecurrentsatus and exams
           
               /*
                  ==============================================================
                  O paciente pode existir na tabela patient e pode nao existir 
                  na tabela patientecurrentsatus. Deixar para mais adiante.
               
               
               
                  ==============================================================                
                */
               
               //die("parou aqui");
               
               $db->sql = "SELECT paciente_session FROM patientecurrentsatus WHERE fk_patient = (SELECT id FROM patient WHERE nb_dossier = '{$patient_recordNumber}');";               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               $arrPacInfo = $stmt->fetchAll(PDO::FETCH_NAMED);
               $paciente_session=$arrPacInfo[0]["paciente_session"];  
               //In fact we should test this ($paciente_session) before UPDATE patientecurrentsatus
               
                              
               //Save the row in the patientecurrentsatus_history               
               //Note: Must to test. If insertion was ok, go to the next step => Change (UPDATE) info inside patientecurrentsatus
               self::post_save_patientecurrentsatus_history($roomId);
               
               //die("save_patientecurrentsatus_history");
               xdebug_break();
               
               /*
               //Grab some info
               $db->sql = "SELECT id,first_name,last_name FROM patient WHERE nb_dossier = '{$patient_recordNumber}';";               
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               $arrPacInfo = $stmt->fetchAll(PDO::FETCH_NAMED);
               */
               
               //echo '$typeNursingId=';
               //echo $typeNursingId;
//               print_r($arrData);
//               die();
               $conn->beginTransaction();
               $sql ="UPDATE patientecurrentsatus 
                            SET 
                                nb_lit_hospitalier='{$bedNumber}',
                                fk_type_nursing={$typeNursingId},
                                disp_type_nursing=(SELECT type FROM type_nursing WHERE id={$typeNursingId}),     
                                fk_type_med={$medicalTeamId},
                                disp_type_med=(SELECT disp_type_med FROM type_med WHERE id={$medicalTeamId}),
                                fk_isolement={$isolationId},
                                disp_isolement=(SELECT isolement FROM isolement WHERE id={$isolationId}),
                                fk_codevacuation={$severityCodeId},
                                fk_chargetravail={$outilChargeId},
                                fk_type_assistance_respiratoire={$respiratoryId},
                                disp_type_assistance_respiratoire=(SELECT type FROM type_assistance_respiratoire WHERE id={$respiratoryId}),
                                fk_nursing={$nurseId},
                                disp_name_nursing=(SELECT CONCAT (first_name,' ',LEFT(last_name, 1),'.') FROM nursing WHERE id={$nurseId}),
                                fk_traitmentsparticuliers={$traitmentsparticuliersId},
                                disp_traitmentsparticuliers=(SELECT type FROM traitements_particuliers WHERE id={$traitmentsparticuliersId}),
                                mouvement_alert='{$alert}',
                                fk_type_conge={$fk_type_conge},
                                disp_type_conge=(SELECT type FROM type_conge WHERE id={$fk_type_conge}),
                                scheduled_departure='{$scheduled_departure}'

                                

                            WHERE fk_patient =(
                                SELECT id FROM patient WHERE nb_dossier='{$patient_recordNumber}'
                            );";
                //die($sql);                
                                
                $conn->exec($sql);                
                                
                                
               /*
               $conn->exec("
                            UPDATE patientecurrentsatus 
                            SET 
                                nb_lit_hospitalier='{$bedNumber}',
                                fk_type_nursing={$typeNursingId},
                                disp_type_nursing=(SELECT type FROM type_nursing WHERE id={$typeNursingId})     
                                fk_type_med={$medicalTeamId},
                                disp_type_med=(SELECT disp_type_med FROM type_med WHERE id={$medicalTeamId}),
                                fk_isolement={$isolationId},
                                disp_isolement=(SELECT isolement FROM isolement WHERE id={$isolationId}),
                                fk_codevacuation={$severityCodeId},
                                fk_chargetravail={$outilChargeId},
                                fk_type_assistance_respiratoire={$respiratoryId},
                                disp_type_assistance_respiratoire=(SELECT type FROM type_assistance_respiratoire WHERE id={$respiratoryId}),
                                fk_nursing={$nurseId},
                                disp_name_nursing=(SELECT CONCAT (first_name,' ',LEFT(last_name, 1),'.') FROM nursing WHERE id={$nurseId}),
                                fk_traitmentsparticuliers={$traitmentsparticuliers},
                                disp_traitmentsparticuliers=(SELECT type FROM traitements_particuliers WHERE id={$traitmentsparticuliers}),
                                mouvement_alert='{$alert}',
                                fk_type_conge={$fk_type_conge},
                                disp_type_conge=(SELECT type FROM type_conge WHERE id={$fk_type_conge}),
                                scheduled_departure='{$scheduled_departure}'

                                

                            WHERE fk_patient =(
                                SELECT id FROM patient WHERE nb_dossier='{$patient_recordNumber}'
                            );");
                */                
                                
               $res1=$conn->commit();
               
                
               //die("UPDATE patientecurrentsatus -- ok");
               //Now insertion into tables  exams, examcurrentsession
               
               //Save the row in the examcurrentsession_history               
               //Note: Must to test. If insertion was ok, go to the next step => Change (UPDATE) info inside examcurrentsession
               
               self::post_save_examcurrentsession_history($paciente_session);           
               
               
               
               if(count($arrInspections)>0){
               
               foreach ($arrInspections as $arrExams) {
                   
                    //Inser an fk_exam if it not exist for a specific $fk_session.
                    //In this way it is not allowed to have 2 fk_exam 1 for the same $fk_session
                    
                    $arrExams["validated"]==true?$validated=1:$validated=2;
                   
                    $conn->beginTransaction();
                    $sql = "INSERT INTO examcurrentsession (fk_exam, fk_session, dt_requested, dt_prevu, dt_finished, fk_status_type, dt_sys,statusdone) 
                            SELECT 
                            {$arrExams["id"]}               as fk_exam, 
                            '{$paciente_session}'           as fk_session, 
                            '{$arrExams["dateTime"]}'       as dt_requested, 
                            NOW()                           as dt_prevu, 
                            NOW()                           as dt_finished, 
                            {$validated}                    as fk_status_type, 
                            NOW()                           as dt_sys, 
                            {$validated}                    as statusdone
                            FROM examcurrentsession
                            WHERE (fk_exam={$arrExams["id"]} AND fk_session='{$paciente_session}')
                            HAVING COUNT(*) = 0;";
                    $conn->exec($sql);       
                    $id = $conn->lastInsertId(); 
                    $res2=$conn->commit();
               }
               
               }
               //die();
               //Note: must delete occurence (exam row) after patiente will be removed from the service.
           }//Update patient info
           else{
               //1-Insert it in the table patient ad grab its id
               //2-Use the roomId and create an realtionship between them in the table patientecurrentsatus, with all information provides
               //3-Insert in periferical tables - exams, critical etc
               //$pacientId = $arrPacInfo["id"];   
               
               
               $conn->beginTransaction();
               // our SQL statements

               $sql="INSERT INTO patient (nb_dossier, first_name, last_name, `status`, dt_sys) 
                     VALUES 
                     ('{$patient_recordNumber}', '{$patient_firstName}', '{$patient_lastName}', '1', NOW());";
//               echo "SQL insert INTO patient OK ==> ";
//               echo ($sql); 
               $conn->exec($sql);
               $pacientId = $conn->lastInsertId();
               $conn->commit();                
               
               
               
               
               
               
               //$fk_exam_status_type and $disp_exam_status_type
               //$fk_exam_status_type was created to hold an information without the need of a inner join query in a 
               //dashboard each 1 second. That will display NA if no exams where acheduled, Done, if all exams where 
               //done and Waiting if AT LEAST on exam is wainting
               //$fk_exam_status_type only to avoid INNERJOIN
               
               //If there is no exams set $fk_exam_status_type to 3 (NA)
               $fk_exam_status_type=3;
               if(count($arrInspections)>0){//If there is exams set $fk_exam_status_type to  (waiting)
                   $fk_exam_status_type=2;
               }
               
               
               
               //$disp_name_patient=$arrPacInfo["first_name"]." ".substr($arrPacInfo["last_name"],1).".";
               $disp_name_patient=$patient_firstName." ".substr($patient_lastName,0,1).".";
               
               $paciente_session = $pacientId."_".date("Y_m_d_H_i_s");
               
               $sql= "SELECT type FROM examstatus_type WHERE id={$fk_exam_status_type};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_exam_status_type= $arrStTyp[0]["type"];
               
//               echo "SQL SELECT type FROM examstatus_type OK ==> ";
//               echo ($sql);
               
               
               $fk_tournee_medicale_fait=2;//Fake this data is not comming from the form. It should not come. 
               $sql= "SELECT type FROM tournee_medicale_type WHERE id={$fk_tournee_medicale_fait};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_tournee_medicale_fait= $arrStTyp[0]["type"];
              
//               echo "SQL insert INTO tournee_medicale_type==> ";
//               echo ($sql); 
               
               $fk_tournee_med_nursing_available=2;//Fake this data is not comming from the form. It should not come. 
               $sql= "SELECT type FROM tournee_med_nursing_available_type WHERE id={$fk_tournee_med_nursing_available};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_tournee_nursing_available= $arrStTyp[0]["type"];
               
//               echo "SQL insert INTO tournee_med_nursing_available_type OK ==> ";
//               echo ($sql);
               
               /*
               $fk_tournee_med_nursing_available=2;//Fake this data is not comming from the form. It should not come. 
               $sql= "SELECT id, CONCAT (first_name,' ',LEFT(last_name, 1),'.') AS disp_name_patron FROM patron
                       WHERE id=(SELECT fk_patron FROM patron_type_med_availability WHERE fk_type_med={$medicalTeamId} AND status_at_work='1');";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_name_patron= $arrStTyp[0]["disp_name_patron"];
               $fk_patron= $arrStTyp[0]["id"];
               
               $fk_type_med=$medicalTeamId;
               */
               
               //Tournee nursing info
               $fk_tournee_med_nursing_available=2;//Fake this data is not comming from the form. It should not come. 
               
               
               //Patron Info
               $sql= "SELECT pt.id, CONCAT (pt.first_name,' ',LEFT(pt.last_name, 1),'.') AS disp_name_patron,tpm.disp_type_med  FROM patron AS pt
                        INNER JOIN patron_type_med_availability AS ptav
                        ON (ptav.fk_patron=pt.id)
                        INNER JOIN type_med AS tpm
                        ON (ptav.fk_type_med=tpm.id)
                        WHERE ptav.fk_type_med={$medicalTeamId} AND ptav.status_at_work='1';";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_name_patron= $arrStTyp[0]["disp_name_patron"];
               $fk_patron= $arrStTyp[0]["id"];               
               $fk_type_med=$medicalTeamId;
               $disp_type_med=$arrStTyp[0]["disp_type_med"];
               
//               echo "SQL insert INTO patron OK ==> ";
//               echo ($sql);
               
               //Fellow
               $sql= "SELECT fl.id, CONCAT (fl.first_name,' ',LEFT(fl.last_name, 1),'.') AS disp_name_fellow  FROM fellow AS fl
                        INNER JOIN fellow_type_med_availability AS flav
                        ON (flav.fk_fellow=fl.id)
                        WHERE flav.fk_type_med=1 AND flav.status_at_work='1';";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_name_fellow= $arrStTyp[0]["disp_name_fellow"];
               $fk_fellow = $arrStTyp[0]["id"];               
               
//               echo "SQL insert INTO fellow OK ==> ";
//               echo ($sql);
               
               //Nurse
               $fk_nursing=$nurseId;
               $sql= "SELECT CONCAT (first_name,' ',LEFT(last_name, 1),'.') AS disp_name_nursing FROM nursing
                        WHERE id = {$fk_nursing};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_name_nursing= $arrStTyp[0]["disp_name_nursing"];
                 
//               echo "SQL insert INTO nursing OK ==> ";
//               echo ($sql);
               
               //pharmacist
               $sql= "SELECT id, CONCAT (first_name,' ',LEFT(last_name, 1),'.') AS disp_name_pharmacist FROM pharmacist
                        WHERE id IN (SELECT fk_pharmacist FROM pharmacist_current_status WHERE status_at_work=1);;";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $fk_pharmacist= $arrStTyp[0]["id"];
               $disp_name_pharmacist= $arrStTyp[0]["disp_name_pharmacist"];
               
               //echo "SQL insert INTO pharmacist OK ==> ";
               //echo ($sql);
               
               $roomnumber=$roomId;
                 
                       
               
               $sql= "SELECT id,disp_name FROM resident_current_status
                        WHERE status_at_work='1';";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               //$fk_resident= $arrStTyp[0]["id"];
               //$disp_name_resident= $arrStTyp[0]["disp_name_resident"];       
               $fk_resident= 1;
               $disp_name_resident= "Test";       
                 
//               echo "SQL insert INTO resident_current_status OK ==> ";
//               echo ($sql);
               
               //type_nursing
               $fk_type_nursing=$typeNursingId;        
               $sql= "SELECT type FROM type_nursing
                        WHERE id={$fk_type_nursing};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_type_nursing= $arrStTyp[0]["type"];        
               
//               echo "SQL insert INTO type_nursing OK ==> ";
//               echo ($sql);
               
               //type_assistance_respiratoire
               $fk_type_assistance_respiratoire=$respiratoryId;        
               $sql= "SELECT type FROM hsjsi.type_assistance_respiratoire
                            WHERE id={$fk_type_assistance_respiratoire};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_type_assistance_respiratoire= $arrStTyp[0]["type"]; 
               
//               echo "SQL insert INTO type_assistance_respiratoire OK ==> ";
//               echo ($sql);
               
               //isolement
               $fk_isolement=$isolationId;        
               $sql= "SELECT isolement AS disp_isolement FROM isolement
                        WHERE id={$fk_type_assistance_respiratoire};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_isolement= $arrStTyp[0]["disp_isolement"];
               
//               echo "SQL insert INTO disp_isolement OK ==> ";
//               echo ($sql);
               
               $fk_codevacuation=$severityCodeId;
               $fk_chargetravail=$outilChargeId;
               
               /////////////////////////////////////////////////////////////////
               
               //isolement
               $fk_traitmentsparticuliers=$traitmentsparticuliersId;
               $sql= "SELECT type FROM traitements_particuliers
                        WHERE id={$fk_traitmentsparticuliers};"; 
                        //echo ("traitements_particuliers==>".$sql);
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_traitmentsparticuliers= $arrStTyp[0]["type"];
               
//               echo "SQL insert INTO traitements_particuliers OK ==> ";
//               echo ($sql);
               
               //Deplacementcritique
               $fk_deplacementcritique=1;//Fake
               $sql= "SELECT type FROM hsjsi.deplacement_critique
                        WHERE id={$fk_deplacementcritique};";                
               $stmt = $db->conn->prepare($sql); 
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_deplacementcritique= $arrStTyp[0]["type"];
               
//               echo "SQL insert INTO deplacement_critique OK ==> ";
//               echo ($sql);
               
               $note="";
               $nb_lit_hospitalier=$bedNumber;
               //$performed_departure="NOW()";
               $mouvement_alert=$alert;
               $codevacuation_hexacode="";
               $traitmentsparticuliers_hexacode="";
               $mouvement_alert_path="";
               
               
               
               //Deplacementcritique
               $fk_type_conge=$fk_type_conge;//Fake
               $sql= "SELECT type FROM type_conge
                        WHERE id={$fk_type_conge};";                
               $stmt = $db->conn->prepare($sql); 
//               echo "SQL insert INTO type_conge TEST ==> ";
//               echo ($sql);
               
               $stmt->execute();
               $arrStTyp = $stmt->fetchAll(PDO::FETCH_NAMED);
               $disp_type_conge= $arrStTyp[0]["type"];
               $disp_type_conge_hexacode="";
               
                       
//               echo "SQL insert INTO type_conge OK ==> ";
//               echo ($sql);
//               die();
               //die(print_r($disp_exam_status_type));
               
               $conn->beginTransaction();               
               $sql = "INSERT INTO patientecurrentsatus
                (
                
                fk_patient,                        disp_name_patient,                 paciente_session,               fk_exam_status_type,                disp_exam_status_type,
                dt_sys_admission,                  fk_tournee_medicale_fait,          disp_tournee_medicale_fait,     fk_tournee_med_nursing_available,   disp_tournee_nursing_available,
                fk_patron,                         disp_name_patron,                  fk_type_med,                    disp_type_med,                      fk_fellow,
                disp_name_fellow,                  fk_nursing,                        disp_name_nursing,              fk_pharmacist,                      roomnumber,
                disp_name_pharmacist,              fk_resident,                       disp_name_resident,             fk_type_nursing,                    disp_type_nursing,
                fk_type_assistance_respiratoire,   disp_type_assistance_respiratoire, fk_isolement,                   disp_isolement,                     fk_codevacuation,
                fk_chargetravail,                  fk_traitmentsparticuliers,         disp_traitmentsparticuliers,    fk_deplacementcritique,             disp_deplacementcritique,note,
                scheduled_departure,               performed_departure,               nb_lit_hospitalier,             mouvement_alert,                    codevacuation_hexacode,
                traitmentsparticuliers_hexacode,   mouvement_alert_path,              fk_type_conge,                  disp_type_conge,                    disp_type_conge_hexacode
                
                )
                VALUES
                (
                {$pacientId},                         '{$disp_name_patient}',                 '{$paciente_session}',           {$fk_exam_status_type},             '{$disp_exam_status_type}',
                NOW(),                                {$fk_tournee_medicale_fait},            '{$disp_tournee_medicale_fait}', {$fk_tournee_med_nursing_available},'{$disp_tournee_nursing_available}',
                {$fk_patron},                         '{$disp_name_patron}',                  {$fk_type_med},                  '{$disp_type_med}',                 {$fk_fellow},
                '{$disp_name_fellow}',                {$fk_nursing},                          '{$disp_name_nursing}',          {$fk_pharmacist},                   {$roomnumber},
                '{$disp_name_pharmacist}',            {$fk_resident},                         '{$disp_name_resident}',         {$fk_type_nursing},                 '{$disp_type_nursing}',
                {$fk_type_assistance_respiratoire},   '{$disp_type_assistance_respiratoire}', {$fk_isolement},                 '{$disp_isolement}',                {$fk_codevacuation},
                {$fk_chargetravail},                  {$fk_traitmentsparticuliers},           '{$disp_traitmentsparticuliers}',{$fk_deplacementcritique},          '{$disp_deplacementcritique}','{$note}',
                '{$scheduled_departure}',             NOW(),                                  '{$nb_lit_hospitalier}',         '{$mouvement_alert}',               '{$codevacuation_hexacode}',
                '{$traitmentsparticuliers_hexacode}', '{$mouvement_alert_path}',              {$fk_type_conge},                '{$disp_type_conge}',               '{$disp_type_conge_hexacode}'
                 
                );";   
              //echo "SQL insert ==> ";
               //die($sql); 
               $conn->exec($sql); 
               //$id = $conn->lastInsertId(); 
               $res2=$conn->commit();
              
               //Insert exams if any
               
//               echo "SQL insert INTO INSERT INTO patientecurrentsatus OK ==> ";
//               echo ($sql);
//               
//               
//               echo "SQL insert INTO INSERT INTO patientecurrentsatus OK ==> ";
//               echo (print_r($arrInspections));
               
               
               if(count($arrInspections)>0){
                   foreach ($arrInspections as $arr) {                       
                        $conn->beginTransaction();               
                        $sql = "INSERT INTO examcurrentsession (fk_exam, fk_session, dt_requested, dt_prevu, dt_finished, fk_status_type, dt_sys,statusdone) 
                                VALUES 
                                ('{$arr["id"]}', '{$paciente_session}', NOW(), NOW(), '{$arr["dateTime"]}', '2', NOW(),'0');";
                        $conn->exec($sql); 
                        $id = $conn->lastInsertId(); 
                        $conn->commit();  
                   }
               }
//               echo "SQL insert INTO INSERT INTO patientecurrentsatus OK ==> ";
//               echo ($sql);
               
               //Status 2 = Occupée
               self::update_roomcurrentstatus($roomId, 2);
               //echo 'tudo ok';
               
           }//Insert new patient
         
        }//End ESLE if($roomStatusId=="1"){   
            
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            echo "<br>=================<br>";     
            echo $this->sql;         
            $this->conn = null;
            die();
        }// End of catch
    } 
    
    public static function update_manageResources($jsonInfo) {
       try {       
               
               $arrData=json_decode($jsonInfo, true); 
                         
               $arrMapProfession=[
                   "1"=>"assistant",
                   "2"=>"agentadmin",
                   "3"=>"agentsalubrite",
                   "4"=>"chefeequipe",
                   "5"=>"chefeunite",
                   "6"=>"fellow",
                   "7"=>"nursing",
                   "8"=>"inhalotherapeute",
                   "9"=>"patron",
                   "10"=>"resident",
                   "11"=>"prepose",
                   "12"=>"pharmacist",                   
               ];
                //xdebug_break();
                $nbProfession=$arrData["profession"];
                $tblProfession=$arrMapProfession[$nbProfession];
                $firstName = $arrData["first_name"];
                $last_name = $arrData["last_name"];
                $residentType=$arrData["residentType"];
                
                $db=new db(); 
                $conn=$db->conn; 
                
                
                $conn->beginTransaction();
                if($nbProfession=="10"){//Insert Resident. Will need $residentType
                    $sql = "INSERT INTO {$tblProfession} (first_name, last_name, fk_type, status, dt_sys, tel)
                            VALUES 
                            ('{$firstName}','{$last_name}','{$residentType}','1',NOW(),' ')";
                } 
                //elseif ($nbProfession<>"10"){//Delete later
                else{
                    $sql = "INSERT INTO {$tblProfession} (first_name, last_name, status, dt_sys)
                            VALUES 
                            ('{$firstName}','{$last_name}','1',NOW())";
                }        
                $conn->exec($sql);       
                $id = $conn->lastInsertId(); 
                $conn->commit();
               
                $arrToJSON = array(
                    "id"=>$id,
                    "URL"=>"http://hsj_dev/api/v1/get/get_list.php?tbl=".$tblProfession.".arr"
                );  
                return json_encode($arrToJSON);
               
              
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    
    public static function update_ProfesDisponibility($jsonInfo) {
       try {       
               xdebug_break();
               $arrData=json_decode($jsonInfo, true); 
               
               $arrIdProfessionals = $arrData["profTypeDispon"];
               if(!is_array($arrData["profTypeDispon"])){
                   $arrIdProfessionals=[$arrData["profTypeDispon"]];
               }
               xdebug_break();
               $arrMapProfession=[
                   "1" =>["tblCurrentStatus"=>"assistant_current_status",     "fkField"=>"fk_assistant",     "tblName"=>"assistant"],
                   "2" =>["tblCurrentStatus"=>"agentadmin_current_status",    "fkField"=>"fk_agentadmin",    "tblName"=>"agentadmin"],
                   "3" =>["tblCurrentStatus"=>"agentsalubrite_current_status","fkField"=>"fk_agentsalubrite","tblName"=>"agentsalubrite"],
                   "4" =>["tblCurrentStatus"=>"chefeequipe_current_status",   "fkField"=>"fk_chefeequipe",   "tblName"=>"chefeequipe"],
                   "5" =>["tblCurrentStatus"=>"chefeunite_current_status",    "fkField"=>"fk_chefeunite",    "tblName"=>"chefeunite"],
                   "6" =>["tblCurrentStatus"=>"fellow_type_med_availability", "fkField"=>"fk_fellow",        "tblName"=>"fellow"],
                   "7" =>["tblCurrentStatus"=>"nursing_current_status",       "fkField"=>"fk_nursing",       "tblName"=>"nursing"],
                   "8" =>["tblCurrentStatus"=>"inhalo_current_status",        "fkField"=>"fk_inhalo",        "tblName"=>"inhalotherapeute"],
                   "9" =>["tblCurrentStatus"=>"patron_type_med_availability", "fkField"=>"fk_patron",        "tblName"=>"patron"],
                   "10"=>["tblCurrentStatus"=>"resident_current_status",      "fkField"=>"fk_resident",      "tblName"=>"resident"],
                   "11"=>["tblCurrentStatus"=>"prepose_current_status",       "fkField"=>"fk_prepose",       "tblName"=>"prepose"],
                   "12"=>["tblCurrentStatus"=>"pharmacist_current_status",    "fkField"=>"fk_pharmacist",    "tblName"=>"pharmacist"]                   
               ];
               xdebug_break();
               $tblProfession    = $arrMapProfession[$arrData["profession"]]["tblName"];
               $tblCurrentStatus = $arrMapProfession[$arrData["profession"]]["tblCurrentStatus"];
               $fkField          = $arrMapProfession[$arrData["profession"]]["fkField"];
               $fk_type_med      = $arrData["profTypeMed"];
               $disp_type_med    =null;
               $arrIsertedId    =null;
               
                
               xdebug_break();
               //Set all rows to status_at_work='0'. 
               //NOTE: This code works good when there is only 1 professional per time.
               //When there is more than 1 it updates all them.
               //Must to change this code later. 
               //Should update only the professional is changing its stautus, not all professional in the table.
               $db=new db();  
               $conn=$db->conn;    
               
               xdebug_break();
               if(isset($arrData["profTypeMed"])){                   
                    //Grab the disp_type_med as it should be displayed                                  
                    $db->sql = "SELECT disp_type_med FROM type_med
                                WHERE id ={$fk_type_med};";               
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();
                    $disp_type_med = $stmt->fetchAll(PDO::FETCH_NAMED);
               }
               
               if(!($arrData["profession"]=="9" || $arrData["profession"]=="6")){               
                    xdebug_break();
                    $conn->beginTransaction();
                    $conn->exec("Update $tblCurrentStatus
                                 SET status_at_work='0';");
                    $res1=$conn->commit();
               }
               
               foreach ($arrIdProfessionals as $idProfessional) {
    
                    //Grab the professional name as it should be displayed
                    $db->sql = "SELECT CONCAT(first_name,' ',last_name,'.') AS disp_name 
                                FROM $tblProfession
                                WHERE id={$idProfessional};";               
                    $stmt = $db->conn->prepare($db->sql); 
                    $stmt->execute();
                    $name = $stmt->fetchAll(PDO::FETCH_NAMED);
                    
                    //Fellow
                    if($arrData["profession"]=="6"){
                        $conn->beginTransaction();
                        $conn->exec("Update $tblCurrentStatus
                                     SET status_at_work='0'
                                     WHERE fk_type_med ={$fk_type_med};");
                        $res1=$conn->commit();
                        $sql = "INSERT INTO $tblCurrentStatus 
                                (dt_current, fk_type_med,      fk_fellow,  fellow_name_concatenated, type_med_type, status_at_work)
                                VALUES  
                                (NOW(),    '{$fk_type_med}','{$idProfessional}',  '{$name[0]["disp_name"]}',        '{$disp_type_med[0]["disp_type_med"]}', '1');";
                    }
                    //Patron
                    elseif ($arrData["profession"]=="9") {
                        $conn->beginTransaction();
                        $conn->exec("Update $tblCurrentStatus
                                     SET status_at_work='0'
                                     WHERE fk_type_med ={$fk_type_med};");
                        $res1=$conn->commit();
                        $sql = "INSERT INTO $tblCurrentStatus 
                                (dt_current, fk_patron,           fk_type_med,      patron_name_concatenated, type_med_type,      status_at_work)
                                VALUES  
                                (NOW(),      '{$idProfessional}', '{$fk_type_med}', '{$name[0]["disp_name"]}',                '{$disp_type_med[0]["disp_type_med"]}', '1');";
                    }
                    //All remains professionals
                    else{
                        
//                        $conn->beginTransaction();
//                        $conn->exec("Update $tblCurrentStatus
//                                     SET status_at_work='0';");
//                        $res1=$conn->commit();
                        
                        $sql = "INSERT INTO $tblCurrentStatus 
                                ({$fkField},          disp_name, dt_sys,      status_at_work)
                                VALUES
                                ('{$idProfessional}', '{$name[0]["disp_name"]}', NOW(),       '1');"; 
                    }
                    
                    $conn->beginTransaction();
                    $conn->exec($sql);   
                    $lid = $conn->lastInsertId(); 
                    $conn->commit();
                    $arrIsertedId[]=$lid;
                   
               }//End of foreach ($arrIdProfessional as $idProfessional) {
                              
                
                $arrToJSON = array(
                    "id"=> count($arrIsertedId),
                    "URL"=>"http://hsj_dev/api/v1/get/get_list.php?tbl=".$tblCurrentStatus.".arr"
                );  
                return json_encode($arrToJSON);
               
              
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }
    
}
