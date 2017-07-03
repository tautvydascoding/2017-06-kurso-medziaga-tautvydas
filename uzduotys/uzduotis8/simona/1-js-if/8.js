console.log("labas");

name = "Tom";
password = "xx1";
age = 79;
// ------------puslapio nustatymai-------
pvm = 21;
// ------------puslapio nustatymai-------


console.log("jusu amzius" + age);
if (age < 14) {
  console.log("Jusu amzius, nepakankamas");
} else if (age >= 15 && age < 65) {
  console.log("25% nuolaida");
} else if (age < 80) {
  console.log("nuolaida 40% senjorams");
} else {
  console.log("dziaukites gyvenimu!");
}

// name = "Tomas";

switch (name) {
  case "paul":
    console.log("labas, Pauliau");
    break;
  case "tom":
    console.log("labas, Tomai");
    break;
  case "jonas":
    console.log("labas, Jonai");
    break;
  default:
    console.log("labas, nepazistamasis");
}



function skaiciuotiPVM(prekesKaina, PVMdydis = 21) {
  ats = (prekesKaina / 100) * PVMdydis;
  console.log("reikes sumoketi PVM: " + ats);
}
skaiciuotiPVM(1000, pvm);


function getPVMvalue( prekesKaina, PVMdydis = 21 ) {
  ats = (prekesKaina / 100) * PVMdydis;
  return ats;
}
mokesciai = getPVMvalue(1000, pvm);

console.log("nuo 1000 turesime sumoketi: ", mokesciai);
