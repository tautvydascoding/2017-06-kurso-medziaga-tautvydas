//console.log("labas");
//
//
//
//// ------------------------------------------------------------
//// |    nr     |     Name     |     lName    |
//// ------------------------------------------------------------
//// |
//// |
//// |
//// |
//// |
//// -----------------------------------------
//
////  1) piestiEilute(x)    f-ja kioje while ciklas nupiesia eilete (x - skaicius kokio ilgio nupiesti)
//// A) susikurti f-ja
//// B) i f-ja ^ ideti while cikla
//// C) uz while atspausdintin suskaiciuota eilute
//
////  2) piestiStulpeli(x)    f-ja kioje while ciklas nupiesia stulpeli
//// 3) nupiestiLentelesStulpeliuPavadinimus(firstColName, secondColName, lastColName) Nereik while!

piestiEilute("- ");

function piestiEilute(x){
    console.log(x);
}


i = 0;
tekstas = "";
while(i > 20){
    tekstas = tekstas + " ";
   console.log(tekstas);
    i++;
}

console.log(tekstas);



function piestiEilute(eilIlgis) {
    var i = 0;
    eilute = "";
    while (i < eilIlgis ) {
      eilute = eilute + "-";
      i = i + 1;
    }
    console.log(eilute);
  }




























//piestiEilute(60);
//nupiestiLentelesStulpeliuPavadinimus("      nr      ", "     Name     ", "    Last Name    ");
//piestiEilute(60);
//piestiStulpeli(5);
//piestiEilute(45);
//
//function piestiEilute(eilIlgis) {
//  var i = 0;
//  tekstas = "";
//  while (i < eilIlgis) {
//    tekstas = tekstas + "-";  // tekstas += "-";
//    i++;       // i = i + 1;
//  }
//  console.log( tekstas );
//}
//
//function piestiStulpeli(stulpAukstis) {
//  i = 0;
//  tekstas = "|";
//  while (i < stulpAukstis) {
//      tekstas = tekstas + " ";
//      console.log(tekstas);
//      i++;
//  }
//}
//function nupiestiLentelesStulpeliuPavadinimus(x1, x2, x3) {
//  console.log("|", x1, "|", x2, "|", x3, "|");
//}
