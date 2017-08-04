<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");

$output = '';

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
$mess = str_split($MESSAGE);
foreach($mess as $char){
    /*if($char == 'C'){
        $output .= '1000011';
    }
    elseif($char == '%'){
        $output .= '0100101';
    }
    elseif($char == 'h'){
        $output .= '1101000';
    }*/
    $ascii = ord($char);
    $binary = decbin($ascii);
    while(strlen($binary) < 7){
        $binary = '0' . $binary;
    }
    while(strlen($binary) > 7){
        $binary = substr($binary, 1);
    }
    $output .= $binary;
}

function translate($binary){
    // turn the string into an array
    $exploded = str_split($binary);
    $output_array = array();
    $offset = 0;
    
    foreach($exploded as $digit){
        if(!isset($output_array[0])){
            $output_array[] = array($digit, 1);
        } else {
            if($digit == $output_array[$offset][0]){
                $output_array[$offset][1]++;
            } else {
                $output_array[] = array($digit, 1);
                $offset++;
            }
        }
    }
    $final_array = array();
    foreach($output_array as $block){
        $number2 = '';
        $value = $block[0];
        $number = $block[1];
        if($value == '1'){
            $value = '0';
        } else {
            $value = '00';
        }
        for($i = 1; $i <= $number; $i++){
            $number2 .= '0';
        }
        $final_array[] = $value;
        $final_array[] = $number2;
    }
    $output = implode(' ', $final_array);
    
    return $output;
}

$array = translate($output);

error_log(var_export($MESSAGE, true));

echo($array . "\n");
?>