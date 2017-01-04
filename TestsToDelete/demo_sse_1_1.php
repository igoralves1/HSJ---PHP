<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

echo "retry: 1000\n";

$time = date('r');
$arrToJSON = array(
    "room1" => array(
        "time" => $time,
        "carc1" => 66678900009,
        "carc2" => "testR1C2",
    ),
    "room2" => array(
        "time" => $time,
        "carc1" => 777,
        "carc2" => "testR2C2",
    ),
    "room3" => array(
        "time" => $time,
        "carc1" => 123412,
        "carc2" => "le nom du patient",
    ),
);

$return = json_encode($arrToJSON);
echo "data: $return\n\n";

flush();
?>
