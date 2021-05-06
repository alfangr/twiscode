<?php

function binaryToDecimal($binaryValue) {
	// $result = bindec($binaryValue);
    // return $result;
    $digits = str_split($binaryValue);
    $reversed = array_reverse($digits);
    $result = 0;

    for($x=0; $x < count($reversed); $x++) {
        if($reversed[$x] == 1) {
            $result += pow(2, $x);
        }
    }

    return $result;
}

function decimalToBinary($decimalValue) {
	// $result = decbin($decimalValue);
    // return $result;
    $i = "";
    while (floor($decimalValue) > 0) {
        $i .= $decimalValue % 2;
        $decimalValue /= 2;
    }
    return strrev($i);
}

function palindrome($sentence) {
    $input = $sentence;
    $result = strrev($input);

    return $result;
}