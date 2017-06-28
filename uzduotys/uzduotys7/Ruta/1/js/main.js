// console.log("Labas");
//
// var name = "Tomulis";
// console.log("Mano vardas " + name);
// console.log("Mano vardas", name);

var vardas = "Ruta";
var pavarde = "Sipkauskaite";
var klase = 12;

console.log("Mano vardas yra " + vardas + ", pavarde " + pavarde + " ir mokausi " + klase + " klaseje.");

console.log("");

function spausdinti() {
  vidurkis = 6;
  praleistosPamokos = 5;
  pastabos = "persistengia";

  console.log("vidurkis: " + vidurkis + ", praleido: " + praleistosPamokos + " pamokas, pastabos: " + pastabos + ".");
}

spausdinti();

console.log("");

// uzduotis 3

// function print ( xx ) {
//   console.log("reiksme: " + xx);
// }
//
// print(116);

console.log("");

var vidurkis = prompt("Koks vidurkis?");

function print () {
  console.log("vidurkis: " + vidurkis + ", praleido: " + praleistosPamokos + " pamokas, pastabos: " + pastabos + ".");
}

print();
