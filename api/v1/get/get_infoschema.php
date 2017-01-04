<?php
include_once '../../../class/db.php';
$verb=$_SERVER['REQUEST_METHOD'];
if($verb=="GET"){
    echo "<pre>";
    print_r(db::get_infoschema()) ;
    echo "</pre>";
}
else{
    die("This is a GET end point");
}




