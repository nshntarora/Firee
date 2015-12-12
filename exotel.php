<?php
$post_data = array(
    'From' => "<Your-Customer's-Number>",
    'To' => "<Your-Exotel-Landline-or-Mobile>",
    'CallerId' => "<Your-Exotel-virtual-number>",
    'Url' => "http://my.exotel.in/exoml/start/<flow_id>",
    'TimeLimit' => "<time-in-seconds>", //This is optional
    'TimeOut' => "<time-in-seconds>", //This is also optional
    'CallType' => "trans"
    'StatusCallback' => "<http//: your company URL>" //This is also also optional
);
 
$exotel_sid = "xxxx"; // Your Exotel SID - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
$exotel_token = "xxxx"; // Your exotel token - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Calls/connect";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
?>