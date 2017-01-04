<?php
header('Content-Type:application/json');
include_once '../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];
if($verb=="GET"){
    


    if(isset($_GET["tbl"])){//Use default select * from $_GET["tbl"]
         header("HTTP/1.1 200 ok");

        $arrURI= explode(".", $_GET['tbl']);
        $tblName=$arrURI[0];
        $displayType=$arrURI[1];

        //die(print_r($displayType));

        if(isset($_GET["fields"]) && isset($_GET["complement"])){
            if(preg_match("/delete|insert|update/i", $_GET["complement"])||preg_match("/delete|insert|update/i", $_GET["fields"])){
                die("Delete or Update ou Insert not allowed. Use appropriate API tool.");
            }
            else{
                $fields = $_GET["fields"];
                $complement = $_GET["complement"];
                echo db::get_list($tblName, $displayType, $fields, $complement);
            }
        }
        else{
            //die("Missing filds or complemet in your query.");
            echo db::get_list($tblName, $displayType);
        }

    }
    else{//use select statement   
       die("Missing tbl variable in your query. Use ... .php?tbl=tblname.json or ... .php?tbl=tblname.arr");
    }

}
else{
    die("This is a GET end point");
}




