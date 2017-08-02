<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $n // the number of temperatures to analyse
);
$temps = stream_get_line(STDIN, 256 + 1, "\n"); // the n temperatures expressed as integers ranging from -273 to 5526

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
//$minimum = 10000;
$temp_array = explode(' ', $temps);
if(strlen($temps) > 0){
    foreach($temp_array as $temp){
        if(isset($minimum)){
            if(abs($temp) < abs($minimum)){
                $minimum = $temp;
            }
            elseif(abs($temp) == abs($minimum)){
                if($temp > $minimum){
                    $minimum = $temp;
                }
            }
            $temp = abs($temp);
        } else {
            $minimum = $temp;
        }
    }
} else {
    $minimum = 0;
}

error_log(var_export($temp_array, true));

echo($minimum . "\n");
?>