console.log("labuka");


// for ciklai
for (i = 0; i < 25; i++) {
  tekstas = "asdkjadohad";
  console.log(tekstas)
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
