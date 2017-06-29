console.log("labuka");


// for ciklai
for (i = 0; i < 25; i++) {
  // tekstas = "asdkjadohad";
  // console.log(tekstas)
}
// masyvai array//
names = ["Tim", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log(names.length);
// surikiuojam
console.log(names.sort());
console.log("po rikiavimo: " + names.join());


for (i=0; i < names.length; i++) {
  console.log( names[i] );
}
// pridet i masyva//
names.push("3 vaikai");
console.log("masyvas po papildymo: " + names.join());
names[20] = "1986-06-06";
console.log(names);

testai = [40]; //sukuria viena stalciu 40//
testai2 = new Array(40); //sukuria 40 stalciu
console.log(testai);
console.log(testai2);

console.log("array " + names.toString()); //i eilute suveda//
console.log("array " + names.join(" : ")); //isveda visa masyva eiluteje atskiriant nurodytu zenklu.

names.pop(); //istrina paskutini elementa is masyvo//
console.log("masyvas po paskutinio elm. istrinimo ", names.toString());
names.shift(); //pirma elementa istrina
console.log("masyvas po pirmo elm. istrinimo ", names.toString());
names.unshift ("zmona"); //prideda pirma elementa
console.log("masyvas po pirmo elm. pridejimo ", names.toString());
names.splice(2, 1, "darbas1", "darbas2"); //nuo kelinto, kiek istrina, du ideda.
console.log("masyvas po splice: ", names.toString());
dalisVardu1 = names.slice(5);
console.log("masyvas po slice 1: ", names.toString(" - "));
dalisVardu = names.slice(2, 5);
console.log("masyvas po slice 3: ", names.toString(" - "));
console.log(dalisVardu);

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "krokodilas"];
masinosBagazine[masinosBagazine.length] = "butelis vandens";
masinosBagazine.unshift ("ziebtuvelis");
masinosBagazine.splice(3, 1);
console.log("testuoju :", masinosBagazine.toString());


// pirma uzduotis//
masyvas = [i];
for (i=0; i<50; i++ ) {
    masyvas[i] = 0;
    i = i + masyvas[i];
}
console.log(masyvas);
//pirma uzduotis//

//antra uzduotis//
i = 0;
sarasas2 = [];
while ( i < 50 ) {
  sarasas2[i] = 1;
  i++;

}
console.log(sarasas2);

// kas antra masyvo elementa paversti i "3"
i = 0;
var namuDarbas = new Array(40);
while ( i < 40) {
  namuDarbas[i] = 3;
  i += 2;
}
console.log(namuDarbas);
