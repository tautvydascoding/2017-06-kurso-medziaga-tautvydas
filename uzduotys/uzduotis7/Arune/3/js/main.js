console.log('labas');



// ----------------------------------------
// |    nr     |     Name     |     lName    |
// ----------------------------------------
// |
// |
// |
// |
// |
// -----------------------------------------

//  1) piestiEilute(x)    f-ja kioje while ciklas nupiesia eilete (x - skaicius kokio ilgio nupiesti)
// A) susikurti f-ja
// B) i f-ja ^ ideti while cikla
// C) uz while atspausdintin suskaiciuota eilute

//  2) piestiStulpeli(x)    f-ja kioje while ciklas nupiesia stulpeli
// 3) nupiestiLentelesStulpeliuPavadinimus(firstColName, secondColName, lastColName) Nereik while!

piestiEilute(60);
piestiStulpeli(5);
nupiestiLentelesStulpeliuPavadinimus("nr", "Name", "Last Name");
piestiEilute(60);
piestiStulpeli(5);




piestiEilute(60);
function piestiEilute(eilutesilgis) {
  var i = 0;
  tekstas = "-";
  while (i < eilutesilgis) {
  tekstas = tekstas + "-"; // txt += "-";
  i++;    // i=i+1;
  }
  console.log(tekstas);
}


piestiStulpeli(5);
function piestiStulpeli(stulpelis){
  var i = 0;
  tekstas = "|";
  while (i < stulpelis) {
    tesktas = tekstas + " ";
    console.log(tekstas);
    i++;
  }
}

nupiestiLentelesStulpeliuPavadinimus();
function nupiestiLentelesStulpeliuPavadinimus(x1, x2, x3) {
}
