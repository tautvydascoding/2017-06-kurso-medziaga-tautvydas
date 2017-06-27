


//Variables

var i = 0;
var j = 0;
var line = "";
var dash = "-";
var column = "|";
var space = " ";

// Function to draw a line

function drawLine(num) {

    while(i < num){
    line += dash;
    i++;
    }
    console.log(line);
    
    line = "";
    i = 0;
}

//function to draw table headers


function drawTableHeaders(firstColName, secondColName, lastColName) {
    console.log("|  ", firstColName, "  |", "  ", secondColName, "  ", "|  ", lastColName, "  |");
}


// Function to draw column


function drawColumn(num2){
    while(j < num2){
    column += space; 
    console.log(column);
    j++;
}

j = 0;
}


//Function to draw all table


function drawTable(x, firstColName, secondColName, lastColName, y, z) {

    drawLine(x);

    drawTableHeaders(firstColName, secondColName, lastColName);

    drawLine(x);

    drawColumn(y);

    drawLine(z);
}
