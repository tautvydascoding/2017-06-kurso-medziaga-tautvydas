console.log("labas");
// ----------puslapio nustaytmai---------
pvm = 21;
//  -------------------------------
name = "Tom";
password = "xx1";
age = 90;

console.log("jusu amzius " + age);

if (age < 14) {
  console.log("Jusu amzius, nepakankamas");
} else if (age >= 15 && age < 65 ) {
   vardas = " petras";
    console.log("nuolaida 40%");
  } else if (age < 80) {
        console.log("nuolaida senjorams   25% papildams");
  } else {
    console.log("dziaukites gyvenimu!");
  }

// name = "jonis";

switch (name) {
  case "paul":
        console.log("labas Pauliau");
        console.log("labas Pauliau");
    break;
  case "Tom":
        console.log("labas Tomai");
    break;
  case "jonis":
        console.log("labas Jonai");
    break;
  default:
        console.log("labas Nepazistamasis");
    break;
}


function skaiciuotiPVM(prekesKaina, PVMdydis = 21) { 
    ats = (prekesKaina / 100) * PVMdydis;
    console.log("reikes sumoketi PVM: " + ats);
}
skaiciuotiPVM(1000, pvm);

function getPVMvalue( prekesKaina, PVMdydis = 21 ) {
        ats = (prekesKaina / 100) * PVMdydis;
        return  ats;
}
mokesciai = getPVMvalue (1000, pvm);

console.log("nuo 1000 turesime sumoketi: ", mokesciai);




//
