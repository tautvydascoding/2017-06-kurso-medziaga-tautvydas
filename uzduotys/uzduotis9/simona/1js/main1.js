console.log("labas");

zmogus = {
  vardas: "Tomas",
  amzius: 13,
  as: 343980493845
};
console.log("name: " + zmogus.vardas);

//FOR ciklas, skirtas bėgti per objektų informaciją
for (x in zmogus) {
  console.log("reiksme:" + zmogus[x]);
}

//irgi tinkamas bėgti per masyvą
vardai = ["Jonas", "Tomas", "Paulius"]
for (y in vardai) {
  console.log("masyvo reiksme:" + vardai[y]);
  //rasim, bet tik pirmąjį iš sąrašo Tomą
  if (vardai[y] == "Tomas") {
    console.log("Radau Tomą.");
    break;
  }
}

//Uzduotis 1
function print (z) {
console.log("meaning:" + z);
}
print(3);

for (var i = 0; i < 20; i++) {
  print(33, "ice");
}

y = 0;
while (y < 20) {
  print(34, "cold")
  y++;
}

//Uzduotis2
function print(x = "nepaduota reiksme") {
console.log(x);
}
print();
//kitas variantas
function print2(x) {
  if (x === undefined) {
    console.log("nepaduota reiksme");
  } else if (isNan(x)){
    console.log("paduota reiksme NE skaicius");
  } else {
      console.log("paduota reiksme skaicius");
    }
}
