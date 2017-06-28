console.log("labas");

name = "Jonas";

if (name == "Jonas") {
  console.log("Prisijunges Jonas");
} else {
  console.log("Ne Jonas");
}

var time = 10;

if ( 4 <= time && time <= 10 ) {
  console.log("Good morning");
}

var x = 20;

if ( x === 5 ) {
  console.log("teisingai");
} else {
  console.log("atsakymas 5");
}

console.log("");

var name = "Ruta";
var password = "xx1";
var age = 22;
var pvm = 21;

console.log("Jusu amzius: " + age);

if ( age < 14 ) {
  console.log("Jusu amzius nepakankamas");
} else if ( age > 14 && age < 65) {
  console.log("40% nuolaida kompiuteriams");
} else {
  console.log("10% nuolaida papildams");
}

console.log("");

switch (name) {
  case "Paulius":
    console.log("Labas " + name);
    break;
  case "Ruta":
    console.log("Labas " + name);
    break;
    case "Petras":
    console.log("Labas " + name);
    break;
    case "Mindaugas":
    console.log("Labas " + name);
    break;
  default:
    console.log("Labas nepazistamasis");
    break;
}

console.log("");

function skaiciuotiPVM(prekesKaina, PVMDydis = 21) {
  ats = ( prekesKaina / 100 ) * PVMDydis;
  console.log("Reikes sumoketi PVM: $" + ats);
}

skaiciuotiPVM(300);

function getPVMValue( prekesKaina, PVMDydis = 21) {
  ats = (prekesKaina / 100) *PVMDydis;
  return ats;
}

mokesciai = getPVMValue (1000, pvm);

console.log("nuo $1000 turesime sumoketi: $" + mokesciai);

console.log("");
