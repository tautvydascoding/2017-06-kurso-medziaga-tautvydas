console.log("funkcijos");

name = "Eziukas";

console.log("Mano vardas " + name);
console.log("Mano vardas", name);


var vardas,
    pavarde,
    klase;
    // sulipdome i


vardas = "Karolis";
pavarde = "Snieckus";
klase = "paskutine";
tekstas = vardas + " "+ pavarde + " " + klase;
console.log( tekstas );



function spausdinti() {
  vidurkis = 6;
  praleistosPamokos = 5;
  pastabos = "persistengia, trukumas vitaminu";
  text = "uzduotis 2: vidurkis: " + vidurkis + " praleido " + praleistosPamokos + " " + pastabos;
  console.log(text);
}
spausdinti();
// uzduotis 3 f-ja kuri atspausdina paduotas reiksmes//
function print ( xx ) {
  console.log ("reiksme : " , xx);
}
print(116);

function spausdinti ( x, xx, xxx) {
  console.log("spausdinti : " , x, xx, xxx);
}
spausdinti(4.5, 5, "geras lankomumas");
