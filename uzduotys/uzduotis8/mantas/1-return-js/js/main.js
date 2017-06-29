console.log("labuka");

pvm = 21;
vardas = "Juozapas";
pass = "xxx";
email = "alfonsiukas@one.lt";
amzius = 14;
console.log("jusu amzius" + amzius);

if (amzius < 15) {
  console.log("uzauk");
} else if (amzius >= 15 && amzius < 65 ) {
  console.log("nuolaida viskam 40%");
} else if (amzius < 80){
  console.log("nuolaida senjorams 40%");
} else {
  console.log("daugiau judek");
}

switch (vardas) {
  case "Jurgis":
    console.log("Labas, Jurgi");
    break;
    case "Juozas":
      console.log("Labas, Juozuk");
      break;
      case "Petras":
      console.log("Labas, Petrai");

        break;
        default:
        console.log("Labas, bevardi");
        break;
}


function skaiciuotiPvm(prekesKaina, Pvmdydis = 21) {
  ats = (prekesKaina / 100) * Pvmdydis;
  console.log("Reikes sumoket PVM: " + ats);
}
skaiciuotiPvm(1000, pvm);
function getPVMvalue( prekesKaina, Pvmdydis = 21) {
  ats = (prekesKaina / 100) * Pvmdydis;
  return ats;

}
mokesciai = getPVMvalue (1000, pvm);
console.log("nuo 1000 turesi sumoketi: ", mokesciai);
