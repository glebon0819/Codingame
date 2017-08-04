<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$strength_index = array();

fscanf(STDIN, "%d",
    $N
);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi
    );
    
    $strength_index[] = $Pi;
}

sort($strength_index);
$last = 0;
$ultimate = end($strength_index);
foreach($strength_index as $strength){
    if($last > 0){
        $difference = $strength - $last;
        if($difference < $ultimate){
            $ultimate = $difference;
        }
        $last = $strength;
    } else {
        $last = $strength;
    }
}

//error_log(var_export($strength_index, true));
echo($ultimate . "\n");
?>