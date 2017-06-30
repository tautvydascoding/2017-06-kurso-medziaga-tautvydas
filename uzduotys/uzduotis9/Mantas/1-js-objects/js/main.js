console.log("labuka");

// kuriam objecta//
zmogus = {
  vardas : "Lukas",
  amzius : 13,
  as: 46544449877987

};
// for ciklas, kuris skirtas begioti po objektu informacija//
for ( x in zmogus) {
  console.log("reiksme: " + zmogus[x]);
}
// for ciklas, kuris skirtas begioti po masyvo informacija//
vardai = ["Jonas", "Tomas", "Paulius"]
for ( y in vardai) {
  console.log("masyvo reiksme: " + vardai[y]);
  //rasim pirma Toma sarase//
  if(vardai[y] == "Tomas") {
    console.log("Radau Toma.");
    break;
  }
};

console.log("vardas: " + zmogus.vardas);


//susikurti funkcija kuri spausdina paduota skaiciu//
function paduotasSkaicius( x ) {
console.log(x);
}
paduotasSkaicius(5);
// paleisti ^ 20 kartu//
for (var i = 0; i < 20; i++) {
  paduotasSkaicius(i);
}
//susikurti f-ja kuri spausdina paduota skaiciu, o jei nepaduoda - spausdina "-1".
function minusine( x ) {
  console.log(x);
  if (x == undefined) {
    console.log("-1");
  }
}
minusine();
