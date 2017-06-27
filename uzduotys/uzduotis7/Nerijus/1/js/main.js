console.log("labas");
name= "tomulis";

console.log("mano vardas " + name);
console.log("mano vardas" , " ", name);
// IDEA: uzduotis
// IDEA: 1 uzduotis
name= "vardenis";
surname= "pavardenis";
klase= "1 klase";

console.log("mano vardas yra " + name );
// IDEA: 1 budas
var vardas,
    pavarde,
    klase;
    vardas = "tomas";
    pavarde = "tomelis";
    klase = 9;
    tekstas = vardas + " " + pavarde+ " " + klase;
    console.log(vardas, pavarde, klase);

    // IDEA: silipdo i bendra stringa
    console.log(tekstas);

    // IDEA: 1 uzduoties pabaiga
    function spausdinti() {
      vidurkis = 6;
      praleistosPamokos = 5;
      pastabos = "persistenge, trukumas vitaminu"
      text = "uzduotis 2: vidurkis: " + vidurkis + " praleido " + praleistosPamokos + " " + pastabos;
      console.log(text);
    }
    spausdinti();

    // IDEA: ------------------uzduotis 3-------------------------
    // IDEA: funkcija kuri atspauzdina paduotas reiksmes (pvz) spausdinti(4.5, 0, "geras lankomumas");
function print ( vidurkis, lankomumas, pastaba ) {
console.log("reiksme : " , vidurkis, lankomumas , pastaba );
}
print(8, 6, "nera");
