console.log("labas");

var tekstas = "";

 for ( i = 0; i < 25; i++ ) {
   tekstas = tekstas + "Tekstas ";
 }

 console.log(tekstas);

console.log("");

var names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
console.log(names);
console.log(names.join());
console.log("Masyvo ilgis: " + names.length);
console.log(names.sort());

names.sort();
console.log("Po rikiavimo: " + names.join());

console.log("");

for ( i = 0; i < names.length; i++) {
  console.log( names[i] );
}

names.push("3 vaikai");
console.log("Masyvas po papildymo: " + names.join());
names[100] = "1986-06-03";
console.log("Masyvas po papildymo: " + names.join());

console.log("");

testai = [20];
testai2 = new Array(20);
console.log("testai [20]: " + testai);
console.log("testai (20): " + testai2);

console.log("");
console.log("");

console.log("array: " + names.toString() );
console.log("array: " + names.join(" : "));

names.pop();

names.splice(1, 0, "garstycios", "zongliruoti");
console.log("array: " + names.toString() );
names.splice(1, 2);
console.log("array: " + names.toString() );

names.slice(1);
console.log("Masyvas po slice: " + names.join("-"));
