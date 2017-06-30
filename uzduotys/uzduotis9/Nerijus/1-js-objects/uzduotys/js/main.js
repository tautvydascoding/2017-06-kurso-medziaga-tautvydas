console.log("labas");

// IDEA: uzduotys funkcija while
function spauzdinti(x) {  // IDEA: sukuria funkcija
  console.log(x);
}
i = 0;
// IDEA: arba for ( i = 0; i < 20; i++)

while (i < 20) {  // IDEA: issaukia funkcija
  spauzdinti(5);
  i++;
}

// IDEA: uzduotis jei niekas nepaduodama spauzdina "-1"
function print(x = "nepaduota reiksme") {
  console.log(x);
}
  print()

// IDEA: kitas variantas
function print2 ( x ) {
  if ( x === undefined)
  // if (ofType (x))
  console.log("nepaduota reiksme");
} else if (isNaN(x)) {
  console.log("paduota reiksme NE skaicius");
} else {
  console.log("paduota reiksme skaicius");
}{

}
print2();
