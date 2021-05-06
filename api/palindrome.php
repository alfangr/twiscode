<?php
header("Content-Type:application/json");
require "../function/function.php";

if(!empty($_GET['sentence'])) {
	$sentence = $_GET['sentence'];
	$result = palindrome($sentence);
	
	if(empty($result)) {
		response(200, "Please fill decimal value" ,NULL);
	} else {
		response(200, "Convert decimal to binary successfully!", $result);
	}
} else {
	response(400,"Invalid Request",NULL);
}

function response($status, $message, $data) {
	header("HTTP/1.1 ".$status);
	
	$response['status'] = $status;
	$response['message']= $message;
	$response['data'] = $data;
	
	$json_response = json_encode($response);
	echo $json_response;
}