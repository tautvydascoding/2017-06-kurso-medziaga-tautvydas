console.log("labas");


var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "krokodilas"];
masinosBagazine.splice(masinosBagazine.lenght, 0, "butelis vandens");
console.log("n" + masinosBagazine.toString());
masinosBagazine.splice(0, 0, "ziebtuvelis");
console.log("n" + masinosBagazine.toString());
delete masinosBagazine [3];
console.log("n" + masinosBagazine.toString());

masinosBagazine [0];
var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "krokodilas"];

sarasas = [];
for (i = 0; i < 50; i++); {
  sarasas [i] = 0;
}
console.log("FOR sarasas:", sarasas); //saras.toString; sarasas.join(";")


function namePrint(x) {
console.log(x);
} x = 0;
sarasas2 = [];
while (x < 50) {
  sarasas2[i] = 1;
  x++;
}
console.log("WHILE sarasas: ", sarasas2);

for (i=0; i < 50; i+=2) {
  sarasas2 = 3;
}
console.log("WHILE sarasas kas 3:", sarasas2);

// ND: 1) pakeisti kas antrą masyvo elementą į 3.
// ND: sukurti Bootstrap'o užduotį iš lentelių
