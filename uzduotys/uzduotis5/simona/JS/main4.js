console.log("labas");
//---------------------------------------------
//---------------------------------------------
//|      nr     |      name    |   last name  |
//---------------------------------------------
//|
//|
//|
//|
//|
//----------------------------------------------

//IDEA piestiEulute (60 ir 65 eilutes, einancias viena paskui kita)

// drawRow(65);
drawRow(60);
// txtRow("    nr    ", "    First name    ", "    Last name    ");
drawRow(60);
drawCol(5);
drawRow(60);

function drawRow(eIlgis) {
  var i = 0;
  txt = "";
  while (i < eIlgis) {
    txt = txt + "-"; // arba --> txt += "-";
    i++; //i = i + 1;
  }
  console.log(txt);
}

// x = "-";
// while ("-") {
//   x = (x + " ")* 45;
//   drawRow(x);
//   break;
// }

//IDEA nupiestiLentelesStulpeliuPavadinimus ("nr", "name", "last name")


function drawRow(eIlgis) {
  var i = 0;
  txt = "";
  while (i < eIlgis) {
    txt = txt + "-"; // arba --> txt += "-";
    i++; //i = i + 1;
  }
  console.log(txt);
}

//IDEA nupiesti lenteles eilutes
function drawCol(colHeight) {
  i = 0;
  x = "|";
  while (i < colHeight) {
    x = x + " ";
    console.log(x);
    i++;
  }
}

function drawRow(eIlgis) {
  var i = 0;
  txt = "";
  while (i < eIlgis) {
    txt = txt + "-"; // arba --> txt += "-";
    i++; //i = i + 1;
  }
  console.log(txt);
}
