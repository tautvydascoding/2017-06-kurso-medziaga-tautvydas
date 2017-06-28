console.log("labas");

// ----------------------------------------
// | nr       |   name    |     lname     |
// ----------------------------------------
// |
// |
// |
// |
// |
// -----------------------------------------

piestiEilute(45);
nupiestiLentele("nr", "name", "last Name");
piestiEilute(45);
piestiStulpeli(5);
piestiEilute = 0;

function print(piestiEilute) {
  console.log("-");
}


function piestiEilute1(x) {
  tekstas = "-";
  while (piestiEilute < x) {
    tekstas = tekstas + "-";
    piestiEilute = piestiEilute + 1; // IDEA: piestiEilute++;
  }
  console.log(tekstas);
}
// piestiEilute1(20);
function piestiStulpeli(stulpAukstis) {
i = 0;
tekstas = "|";
while (i < stulpAukstis) {
  console.log("|");
  tekstas = tekstas + " ";
  i++;
}
}
