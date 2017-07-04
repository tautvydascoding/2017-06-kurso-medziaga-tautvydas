console.log("labas");

name = "Tomulis";

console.log("mano vardas " + name);
console.log("mano vardas", "iki", name);

//IDEA 1
//A) sukurti kintamuosius: vardas, pavarde, klase;
//B) priskirti jiems reiksmes;
//C) isvesti juos i konsole;.

var vardas,
  pavarde,
  klase;

//IDEA 2
//
  vardas = "Ignas";
  pavarde = "Tamulionis";
  klase = 9;
  tekstas = "uzduotis 1 " + "klase " + vardas + " " + pavarde;
  console.log( tekstas );

function tName() {
  vidurkis = 8;
  praleistosPamokos = 5;
  pastabos = "persistengia besimokydamas";
  text = "vidurkis: " + vidurkis + "praleido" + praleistosPamokos + "";
  console.log(text);
}

tName();


function print ( x ) {
  console.log("reiksme", x);
}
print(116);

//IDEA 3

function printName(x, y, text) {
  console.log("reiksme : ", x, y, text);
}
printName(4.5, 0, "geras lankomumas");
printName(5, 1, "zaidzia telefonu");
printName(0, 4, "geras vaikas");












;
