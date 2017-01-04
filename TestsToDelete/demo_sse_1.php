<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

echo "retry: 1000\n";
//$time = date('r'); 
//echo "data: The server time is: {$time}\n\n";
//$json='{"room1":{"arg1":"val1","arg2":"val2"},"room2":{"arg1":"val1","arg2":"val2"},"room3":{"arg1":"val1","arg2":"val2"}}';
//echo "data: The JSON is: {$json}\n\n";




$time = date('r');
$arrToJSON = array(
    "room1" => array(
        "time" => $time,
        "carc1" => 111111,
        "carc2" => "testR1C2",
    ),
    "room2" => array(
        "time" => $time,
        "carc1" => 8888888,
        "carc2" => "testR2C2",
    ),
    "room3" => array(
        "time" => $time,
        "carc1" => 123412,
        "carc2" => "testR3C2",
    ),
);



/*
$arrToJSON = array(
    "dataPHPtoJs" => "yourData",
    "asYouWant" => 123456
);
*/


//$return = json_encode(array($arrToJSON));
//echo "data: $return\n\n";

$return = json_encode($arrToJSON);
echo "data: $return\n\n";

flush();
?>
