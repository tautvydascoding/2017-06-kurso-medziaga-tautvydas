console.log("labas");
// IDEA: -----------------puslapio nustatymai----------------------------
pvm = 21;
name = "Burundukas";
password = "xx1";
age = "90";

console.log("jusu amzius" + age);
if (age < 14) {
  console.log("Jusu amzius, netinkamas");
} else if (age >= 15 && age < 65) {
  console.log("nuolaida -40%");
} else if (age < 80) {
  console.log("nuolaida senjorams papildams -25%");
} else {
  console.log("dziaukites gyvenimu");
}
switch (name) {
  case "tom":
    console.log("labas tomai");
    break;
  case "jonas":
    console.log("labas pauliau");
    break;
  default:
    console.log("labas nepazystamasis");
    break;
}

function skaiciuotiPVM(prekesKaina, PVMdydis = 21) {
ats = (prekesKaina / 100) * PVMdydis;
console.log("reikes sumoketi PVM: " + ats);
}
skaiciuotiPVM(1000, pvm)

function getPVMvalue(prekesKaina, PVMdydis = 21) {
  ats = (prekesKaina / 100) * PVMdydis;
  return ats;
}
mokesciai  = getPVMvalue(1000, pvm);
console.log("nuo 1000 turesime sumoketi: ", mokesciai);
