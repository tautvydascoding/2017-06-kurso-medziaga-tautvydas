console.log("labas");

zmogus = {
  vardas: "Tomas",
  amzius: 25,
  as: 32210923839
};

zmogus.amzius = 26;

// FOR cikas, kuris skirts begti per Obj - informacija
for (x in zmogus) {
  console.log("reiksme: " + zmogus[x]);
}
console.log("");


//irgi tinkamas begti per masyva
vardai = ["Jonas", "Tomas", "Paulius"];
for (y in vardai) {
    console.log("Masyvo reiksme: " + vardai[y]);
    // rasim tik pirmaji is saraso Toma
    if( vardai[y] == "Tomas") {
      console.log("Radau Toma");
      break;
    }
}
console.log("");

// A) susikurti funkcija, kuri spausdina i konsole paduota  kaiciu (lengvesne uzduotis: betkoki skaiciu)

function print(skaicius) {
  console.log(skaicius);
}

console.log(15);
console.log("");

// B) Paleisti funkcija 20 kartu

// i = 0;
// skaicius = 15;
//
// while (i < 20) {
//   print(skaicius);
//   i++;
// }
//
// console.log();

for (i = 0; i < 20; i++) {
  print(15);
}

// C) susikurti funkcija, kuri spausdina paduota skaiciiu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")

function spausdinti (x = "nepaduota reiksme") {
  console.log(x);
}

spausdinti();

function spausdinti2 (x) {
  if (x == undefined) {
    console.log("neduota reiksme");
  } else if (isNaN(x)) {
    console.log("Tai ne skaicius");
  } else {
    console.log("Tai skaicius");
  }
}
spausdinti2(5);
