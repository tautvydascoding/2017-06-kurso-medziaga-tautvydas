console.log("funkcijos");

piestiEilute(60);
nupiestiLentelesStulpeliuPavadinimus ("nr", "Name", "Last Name");
piestiEilute(45);
piestiStulpeli(5);
// piestiEilute(45);

function piestiEilute(eililgis) {
  var i = 0;
  tekstas = "";
  while (i < eililgis) {
    tekstas = tekstas + "-";
    i++;
}
console.log(tekstas );
}

function piestiStulpeli(stulp) {
  var y = 0;
  aukstis = "|";
  while (y < stulp) {
    aukstis = aukstis + " ";
    console.log(aukstis)
    y = y + 1;
  }
}
function nupiestiLentelesStulpeliuPavadinimus(x1, x2, x3) {
  console.log("|    ", x1, "  |  ", x2, "   |  ", x3, "   |");
}
