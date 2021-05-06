<?php
header("Content-Type:application/json");
require "../function/convert-number.php";

if(!empty($_GET['binary'])) {
	$binaryValue = $_GET['binary'];
	$result = binaryToDecimal($binaryValue);
	
	if(empty($result)) {
		response(200, "Please fill binary value" ,NULL);
	} else {
		response(200, "Convert binary to decimal successfully!", $result);
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