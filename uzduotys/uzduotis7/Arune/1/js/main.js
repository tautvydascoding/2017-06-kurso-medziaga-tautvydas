console.log ('labas');

name ="Tomulis";

console.log (" Mano vardas " + name );
console.log (" Mano vardas " , " ", name );

// IDEA: uzduotis 1
// a) sukurti 3 kintamuosius: vardas, pavarde, klase
// b) priskirti jiems reiksmes
// c) isvesti juos i konsole





vardas = "Tomas";
pavarde = "Tomukauskas";
klase = 21;

// sulipdo i viena String //

tekstas = " uzduotis 1 " + vardas + pavarde + klase;

console.log ( tekstas );


function spausdinti() {
  vidurkis = 6;
  praleistosPamokos = 5;
  pastabos = "persistengia", "trukumas vitaminu";
  text = "vidurkis: " + vidurkis + " praleido " + praleistosPamokos + " " + pastabos;
  console.log(text);
}

spausdinti();

// ------uzduotis 3---------- //
// f-ja kuri atspausdina paduotas reiksmes (pvz: spausdinti(4.5, 0, "geras lankomums"))

function print ( xx ) {
  console.log ( " reiksme : " ,  xx);
}

print(116);



function print2 ( kk, k2, k3 ) {
  console.log( kk, k2, k3 );
}

print2(9.6, 1, "geras lankomumas");
print2(6, 2, "vidutiniskas");
print2(5, 5, "geras");
