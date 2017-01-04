<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menu
 *
 * @author Igor Alves - igoralves1@gmail.com
 */

class menu{
 
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
    public static function deplacement_critique() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id, type FROM deplacement_critique";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
                
                /*
                //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //$result = $stmt->fetchAll(PDO::FETCH_LAZY);
                //$result = $stmt->fetchAll(PDO::FETCH_NUM);
               
                $str="<select id='menu_deplacement_critique'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               //return $str ;
                 
               */
                
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function type_med() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id, type FROM type_med";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_type_med'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function type_nursing() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id, type FROM type_nursing";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_type_nursing'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function type_assistance_respiratoire() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id, type FROM type_assistance_respiratoire";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_type_assistance_respiratoire'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function evacuation() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,evacuation FROM evacuation";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='evacuation'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['evacuation']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function isolement() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,isolement FROM isolement";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='isolement'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['isolement']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function resident() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM resident WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='resident'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function nursing() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM nursing WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='nursing'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function patron() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM patron WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='patron'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function fellow() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM fellow WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='fellow'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function pharmacist() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM pharmacist WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='pharmacist'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function exams() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,exams FROM exams";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_exams'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['exams']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function tournee_medicale_type() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,type FROM tournee_medicale_type";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_tournee_medicale_type'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function tournee_med_nursing_available_type() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,type FROM tournee_med_nursing_available_type";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
               $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               
               /*
                $str="<select id='menu_tournee_med_nursing_available_type'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function examstatus_type() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,type FROM examstatus_type";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_examstatus_type'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['type']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function available_room() {
       try {               
               $db=new menu();               
               $db->sql = " SELECT R.id, R.roomnumber  FROM room R
                            INNER JOIN roomcurrentstatus AS RCS
                            ON(RCS.fk_room=R.id)
                            WHERE RCS.fk_statusroom=1
                            ORDER BY R.id ASC;";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_available_room'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['roomnumber']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function inhalotherapeute() {
       try {               
               $db=new menu();               
               $db->sql = " SELECT id,first_name,last_name FROM inhalotherapeute WHERE status='1';";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_available_room'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['roomnumber']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function agentsalubrite() {
       try {               
               $db=new menu();               
               $db->sql = " SELECT id,first_name,last_name FROM agentsalubrite WHERE status='1';";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_available_room'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['roomnumber']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function prepose() {
       try {               
               $db=new menu();               
               $db->sql = " SELECT id,first_name,last_name FROM prepose WHERE status='1';";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='menu_available_room'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['roomnumber']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }    
    public static function assistant() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM assistant WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='fellow'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    }   
    public static function chefeequipe() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM chefeequipe WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='fellow'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function agentadmin() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,first_name,last_name FROM agentadmin WHERE status='1'";
               $stmt = $db->conn->prepare($db->sql); 
               $stmt->execute();
               
               
                $result = $stmt->fetchAll(PDO::FETCH_NAMED);
               /*
                $str="<select id='fellow'>";
                foreach ($result as $value) {
                    $str.="<option id='{$value['id']}'>{$value['first_name']}.{$value['last_name']}</option>";
                }
                $str.="</select>";
               
               return $str ;
               */
               return json_encode($result);
                  
       }// End of try
       catch(PDOException $e){
            echo $e->getMessage();     
            $this->conn = null;
            die();
        }// End of catch
    } 
    public static function typeresident() {
       try {               
               $db=new menu();
               
               $db->sql = "SELECT id,description FROM typeresident;";
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

 
 
}
