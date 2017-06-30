console.log("labas");
// IDEA: -----------------------puslapio nustatymai-----------------------------

// IDEA: kuriam objekta
zmogus = {
  vardas: "Tomas",
  amzius: 13,
  as: 123456789
};
// IDEA: for ciklas kuris skirtas begti per obj informacija
for (x in zmogus) {
  console.log("name: " + zmogus[x]);
}
// IDEA: tinkamas  begti per masyva
vardai = ["jonas", "tomas", "paulius"];
for (y in vardai) {
  console.log("masyvo reiksme: " + vardai[y]);
  // IDEA: rasim tik pirmaji toma is saraso
  if (vardai[y] == "Tomas") {
    console.log("radau Toma.");
    break;
  }
}