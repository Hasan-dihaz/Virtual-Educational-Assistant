<?php        
$to = "01876829362";
$token = "c33bdea62507cf8949da91af16441de4";
//$token = "cd0b40dcaf1f8b3eb51d788d2de926b2 ";


$message = "Join meeting after five minute";

$url = "http://api.greenweb.com.bd/api.php?json";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
//echo $smsresult;

//Error Display
//echo curl_error($ch);

?>