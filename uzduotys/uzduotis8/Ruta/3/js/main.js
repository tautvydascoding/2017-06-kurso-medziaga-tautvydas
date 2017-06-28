console.log("labas");

var masinosBagazine = [" atarginis ratas", " kastuvas", " gesintuvas", " virve", " krokodilas"];

masinosBagazine[masinosBagazine.length] = " butelis vandens";
console.log("Papildymas gale: " + masinosBagazine.toString() );
console.log("");

masinosBagazine.splice(0, 0, " ziebtuvelis");
console.log("Papildymas pradzioje: " + masinosBagazine.toString() );
console.log("");

delete masinosBagazine[2];
console.log("Antro elemento istrynimas: " + masinosBagazine.toString() );
console.log("");

nuliai = new Array(50);
nuliai = nuliai.join("0");
console.log("Nuliai: " + nuliai);

console.log("Nulis: " + nuliai[5]);
console.log("");

i = 0;
masyvas = [];

while ( i < 50 ) {
  masyvas.push(i)
  i++;
}

console.log(masyvas);
