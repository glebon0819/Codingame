/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

var inputs = readline().split(' ');
var lightX = parseInt(inputs[0]); // the X position of the light of power
var lightY = parseInt(inputs[1]); // the Y position of the light of power
var initialTX = parseInt(inputs[2]); // Thor's starting X position
var initialTY = parseInt(inputs[3]); // Thor's starting Y position

var currentTX = initialTX;
var currentTY = initialTY;

var dirX = "";
var dirY;

// game loop
while (true) {
    var remainingTurns = parseInt(readline()); // The remaining amount of turns Thor can move. Do not remove this line.
    // Write an action using print()
    // To debug: printErr('Debug messages...');
    dirX = "";
    dirY = "";

    // A single line providing the move to be made: N NE E SE S SW W or NW
    if(currentTX > lightX){
        dirX = "W";
        currentTX--;
    }
    else if(currentTX < lightX){
        dirX = "E";
        currentTX++;
    }
    
    if(currentTY > lightY){
        dirY = "N";
        currentTY--;
    }
    else if(currentTY < lightY){
        dirY = "S";
        currentTY++;
    }
    
    print(dirY + dirX);
}