console.log("labas");

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];
masinosBagazine.push("butelis vandens");
masinosBagazine[ masinosBagazine.length ] = "butelis vandens";

masinosBagazine.unshift("ziebtuvelis");
masinosBagazine.splice(0, 0, "ziebtuvelis");

delete masinosBagazine[3];   // IDEA: nelabai naudoti , nes stalcius liks, o kiti liks
masinosBagazine.splice(2,1);


sarasas = [];
console.log(0 + i);
for (var i = 0; i < 50; i++) {
  sarasas[i] = 0;
}
console.log("for sarasas: ", sarasas); // IDEA: saras.toString; sarasas.join(" ; ")

sarasas2 = [];
i = 0;
while (i < 50) {
sarasas2[i] = 1;
i++;
  }
  console.log("while sarasas: ", sarasas2 );
