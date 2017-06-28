console.log("valio");
pvm = 21;
name = "Vardas";
password = "xx1";
age = "80";

console.log("jusu amzius", +  age);

if (age < 14) {
  console.log("Per jaunas");
} else  if (age >= 15 && age < 65) {
  console.log("nuolaida 40%");
} else  if (age < 80){
  console.log("nuolaida  senjorams 25%");
} else {
  console.log("dziaukites gyvenimu!");
}


switch (name) {
  case "paul":
  console.log("sveikas Pauliau");
  console.log("sveikas Pauliau");
  break;
  case "tom":
  console.log("sveikas Tomai");
  break;
  case  "jon":
    console.log("sveikas Jonai");
    break;
    default:
    console.log("sveikas Ubbb");
    break;

}

function skaiciuotiPVM (prekesKaina, PVMdysis = 21) {
ats = (prekesKaina / 100) * PVMdysis;
console.log("reikes sumoketi PVM: " + ats);
}
skaiciuotiPVM(1000, pvm);

function getPVMvalue(prekesKaina, PVMdysis = 21) {
  ats = (prekesKaina / 100) * PVMdysis;
  return ats;
  }

mokesciai = getPVMvalue (1000, pvm);
console.log("nuo 1000 turesime sumoketi: ", mokesciai);
