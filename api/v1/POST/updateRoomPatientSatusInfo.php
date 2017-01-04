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
    

    
        
        //header("HTTP/1.1 201 tudook");        
        header("HTTP/1.1 201 tudook");      
        //$arrData=$_POST["data"];
        
        //echo $arrData;
        //die();
        
       
       
        $arrData = [
            "roomId"=> 1,
            "roomStatusId"=> 3,
            "postNumber"=> 123,
            "patient"=> [
                        "lastName"=> "Fisher",
                        "firstName"=> "Elizabeth",
                        "recordNumber"=> "df745646"
                        ],
            "bedNumber"=> 3333,
            "typeNursingId"=> 3,
            "medicalTeamId"=> 2,
            "isolationId"=> 5,
            "severityCodeId"=> 4,
            "outilChargeId"=> 3,
            "respiratoryId"=> 2,
            "nurseId"=> 7,            
            "affectedResidents"=> [
                        [
                          "name"=> "Alfred",
                          "type"=> "1"
                        ],
                        [
                          "name"=> "Yann",
                          "type"=> "3"
                        ]            
            ],
            "specialTreatments"=> [
                        [
                          "id"=> 2
                        ],
                        [
                          "id"=> 4
                        ],
                        [
                          "id"=> 5
                        ]
            ],
            "inspections"=> [
                [
                  "id"=> "1",
                  "date"=> "23/10/2016",
                  "time"=> "17:00",
                  "validated"=> true,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "2",
                  "date"=> "24/10/2016",
                  "time"=> "19:00",
                  "validated"=> false,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "3",
                  "date"=> "22/10/2016",
                  "time"=> "20:00",
                  "validated"=> true,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "4",
                  "date"=> "22/10/2016",
                  "time"=> "20:00",
                  "validated"=> true,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ]
            ],
            "releases"=> [
                [
                  "id"=> "1",
                  "date"=> "23/10/2016",
                  "time"=> "17:00",
                  "dateTime" =>  "2016-10-28 17:00:12"   
                ],
                [
                  "id"=> "2",
                  "date"=> "24/10/2016",
                  "time"=> "13:00",
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "3",
                  "date"=> "22/10/2016",
                  "time"=> "16:00",
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ]
            ],
            "critical"=> false
        ];
 
 
        xdebug_break();
        /*
        //New patient
        $arrData = [
            "roomId"=> 3,
            "roomStatusId"=> 3,
            "postNumber"=> 123,
            "patient"=> [
                        "lastName"=> "alves",
                        "firstName"=> "igor",
                        "recordNumber"=> "aasdfadsf877"
                        ],
            "bedNumber"=> 10101010,
            "typeNursingId"=> 2,
            "medicalTeamId"=> 1,
            "isolationId"=> 5,
            "severityCodeId"=> 4,
            "outilChargeId"=> 3,
            "respiratoryId"=> 2,
            "nurseId"=> 7,            
            "affectedResidents"=> [
                        [
                          "name"=> "Alfred",
                          "type"=> "1"
                        ],
                        [
                          "name"=> "Yann",
                          "type"=> "3"
                        ]            
            ],
            "specialTreatments"=> [
                        [
                          "id"=> 2
                        ],
                        [
                          "id"=> 4
                        ],
                        [
                          "id"=> 5
                        ]
            ],
            "inspections"=> [
                [
                  "id"=> "1",
                  "date"=> "23/10/2016",
                  "time"=> "17:00",
                  "validated"=> true,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "2",
                  "date"=> "24/10/2016",
                  "time"=> "19:00",
                  "validated"=> false,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "3",
                  "date"=> "22/10/2016",
                  "time"=> "20:00",
                  "validated"=> true,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "4",
                  "date"=> "22/10/2016",
                  "time"=> "20:00",
                  "validated"=> true,
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ]
            ],
            "releases"=> [
                [
                  "id"=> "1",
                  "date"=> "23/10/2016",
                  "time"=> "17:00",
                  "dateTime" =>  "2016-10-28 17:00:12"   
                ],
                [
                  "id"=> "2",
                  "date"=> "24/10/2016",
                  "time"=> "13:00",
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ],
                [
                  "id"=> "3",
                  "date"=> "22/10/2016",
                  "time"=> "16:00",
                  "dateTime" =>  "2016-10-28 17:00:12" 
                ]
            ],
            "critical"=> false
        ];         
         */
//        
//        $js= json_encode($arrData);
//        echo $js;
//        echo "<br/>";
//        echo "<br/>";
//        echo "<br/>";
        //die();
        //echo '$_POST content <br>';
        //die(print_r($_POST));
        //$arrData=$_POST["data"];
        //$arrData= json_encode($arrData);
        //die("it is comming here");
        $arrData=$_POST["data"];
        //die(print_r($_POST));
        db::update_PatientInfo($arrData);
        
       
       
}
else{
        die("Not POST!");
        
    }