console.log("labas");
nevedes = true;
while (nevedes) {
  console.log("testuoju while cikla");
  nevedes = false;
}

// IDEA: 50 kartu atspauzdinti zodi: "azuolas"
i = 0;
while (i < 50) {
  console.log("azuolas" + i);
  i = i + 1;
}
i = 0;
function print (reiksme) {   // IDEA: reiksme - laikinasis kintamasis, kuris gauna kvietimo metu suteikta reiksme
console.log(reiksme);
}
while (i < 150) {
print(i); // IDEA: kviecia funkcija
i = i + 1 // IDEA: didiname i reiksme, kad pasiektu 150
}

 // IDEA: i = i + 1; tai yra tas pats kas i++; arba k--; sumazeja vienetu
