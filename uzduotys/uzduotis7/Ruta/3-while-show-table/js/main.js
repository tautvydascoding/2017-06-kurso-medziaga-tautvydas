console.log("Labas");

// piestiEilute(45);
// piestiLentelesStulpeliuPavadinimus("nr", "Name", "LName");
// piestiEilute(45);
// piestiStulpeli(5);
// piestiEilute(45);


// Pirmoji eilute

// tekstas = "";
//
// function piestiEilute( x ) {
//   tekstas = tekstas + "-";
// }
//
// i = 0;
// while (i < 45 ) {
//   piestiEilute(i);
//   i = i + 1;
// }
//
// console.log(tekstas);

piestiEilute(40);

  function piestiEilute(eilIlgis) {
    var i = 0;
    eilute = "";
    while (i < eilIlgis ) {
      eilute = eilute + "-";
      i = i + 1;
    }
    console.log(eilute);
  }


// Antroji eilute

function print (nr, name, lName) {
  console.log("| ", nr, " | ", name, " | ", lName, " | ");
}

print(1, "Ruta", "Sipkauskaite");

// Trecia eilute

piestiEilute(40);

// Stulpelis

stulpelis = "|";
i = 0;
  while( i < 5) {
  console.log(stulpelis);
  stulpelis = stulpelis + " ";
  i = i + 1;
}

piestiEilute(40);

function print (col, col1, col2) {
  console.log("| ", col, " | ", col1, " | ", col2, " | ");
}

print("1st column", "2nd column", "3rd column");
