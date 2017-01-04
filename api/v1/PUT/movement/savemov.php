<?php
//next eample will change status of specific conversation to resolve
$service_url = 'http://hsj_dev/api/v1/movement/patient.php';
$ch = curl_init($service_url);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
$data = array("p_session" => 'p_session_value',"mouvement_alert" => 'mouvement_alert_value(0 or 1)');
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
$response = curl_exec($ch);
if ($response === false) {
    $info = curl_getinfo($ch);
    curl_close($ch);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($ch);
$decoded = json_decode($response);
echo "<pre>";
print_r($decoded);
echo "</pre>";