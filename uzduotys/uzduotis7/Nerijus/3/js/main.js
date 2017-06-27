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

// piestiEilute(45);
// nupiestiLentele("nr", "name", "last Name");
// piestiEilute(45);
// piestiStulpeli(5);
piestiEilute = 0;

function print(piestiEilute) {
  console.log("-");
}
// tekstas = "-";
// while (piestiEilute < 40) {
//   tekstas = tekstas + "-";
//   piestiEilute = piestiEilute + 1;
// }
// console.log(tekstas);

function piestiEilute1(x) {
  tekstas = "-";
  while (piestiEilute < x) {
    tekstas = tekstas + "-";
    piestiEilute = piestiEilute + 1;
  }
  console.log(tekstas);
}
piestiEilute1(20);
