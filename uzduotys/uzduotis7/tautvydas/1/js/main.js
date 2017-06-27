console.log("labas");

name = "Tomulis";

console.log("Mano vardas " +  name);
console.log("Mano vardas" , " ",  name);

// IDEA: uzduotis 1
// A) sukurti 3 kintamuosius: vardas, pavarde, klase
// B) priskiti jiems reiksmes
// C) isvesti juos i konsole
// IDEA: uzduotis 2
// sukurti f-ja "spausdinti()", ir joje sukurti 3 kintamuoius ir juos isvesti i konsole

// uzduotis 1 A,B,B
var vardas,
    pavarde,
    klase;

vardas = "Karolis";
pavarde = "Kolulonis";
klase = 9;

// sulipdome i bendra Sting (kintamaji)
tekstas = "uzduotis 1 " + vardas + " " + pavarde + " " + klase;

console.log(  tekstas );

function spausdinti() {
  vidurkis = 6;
  praleistosPamokos = 5;
  pastabos = "persistengia, trukumas vitaminu";
  text = "uzduotis 2: vidurkis: " + vidurkis + " praleido " + praleistosPamokos + "  " + pastabos;
  console.log(text);
}

spausdinti();
// ----------------uzduotis 3 -------------------
// f-ja kuri atspausdina paduotas reiksmes
// pvz: spausdinti(4.5, 0, "geras lankomumas");

function print ( xx ) {
  console.log("reiksme : " , xx);
}
print(116);
function spausdinti( vidurk, praleista, text ) {
    console.log("reiksme : " , vidurk, praleista, text );
}
spausdinti (3.5, 6, "");
spausdinti (7, 0, "zaidia telefonu");
spausdinti (6, 32, "tingi");


// uzduotis X - times kam sunkiau su programavimu ------------
// A) sukurti f-ja, kuri isveda i konsole teksta: "Labas vakasras Kaune!"
// B) sukurti f-ja SpausdinuVarda(vardas), kuri isveda i konsole teksta:  paduota kintamaji
// C) sukurti f-ja kelimasKvadratu(x), kuri isveda i konsole paduoto kintamo reiksme pakelta kvadratu ( pvz x*x)
// D) sukurti f-ja skaiciavimai(x,y,z), kuri isveda i konsole x + 2, y + 4, z *2







//
