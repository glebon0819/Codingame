<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

fscanf(STDIN, "%d %d %d %d",
    $lightX, // the X position of the light of power
    $lightY, // the Y position of the light of power
    $initialTX, // Thor's starting X position
    $initialTY // Thor's starting Y position
);

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $remainingTurns // The remaining amount of turns Thor can move. Do not remove this line.
    );
    
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    if(!isset($turnsDone)){
        $turnsDone = 0;
    }
    
    if($turnsDone == 0){
        $currentTX = $initialTX;
        $currentTY = $initialTY;
    }
    else {
        switch($yOut){
            case 'S':
                $currentTY++;
                break;
            case 'N':
                $currentTY--;
                break;
        }
        switch($xOut){
            case 'W':
                $currentTX--;
                break;
            case 'E':
                $currentTX++;
                break;
        }
    }
        
    if($lightY > $currentTY){
        $yOut = 'S';
    } 
    elseif($lightY < $currentTY){
        $yOut = 'N';
    }
    else{
        $yOut = '';
    }
    
    if($lightX > $currentTX){
        $xOut = 'E';
    } 
    elseif($lightX < $currentTX){
        $xOut = 'W';
    }
    else{
        $xOut = '';
    }
    $turnsDone++;
    // A single line providing the move to be made: N NE E SE S SW W or NW
    echo($yOut . $xOut . "\n");
    
}
?>