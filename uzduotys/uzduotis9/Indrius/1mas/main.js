console.log("valio");
 // kuriame objektus///
 zmogus = {
   vardas: "Tomas",
   amzius: 25,
   as: 38303324567
 };

// For ciklas begti per objektus////
for (x in zmogus) {
  console.log("reiksme: " + zmogus[x]);
}
// irgi tinkamas begti per masyva//
vardai= ["Jonas", "Tomas", "Paulius"];
for ( y in vardai ) {
  console.log("reiksme1: " + vardai[y]);

if (vardai[y]=="Tomas") {
  console.log("Radus Toma.");
  break;
}
}

function skaicius(xx) {
  console.log("reik: ", xx);

}
skaicius (555, 88);

for (i = 0; i < 10; i++) {
  console.log(i + "55");
}
t = 0;
while (t < 10) {
  skaicius (444);
  t++;
  }
function nauja( a = "nieko") {
  console.log(x);
}
nauja ();


function nauja2( x ) {
  if (x === undefined) {
    console.log("nulis");
  } else if (isNaN(x)) {
    console.log("tikrina ar skaicius");
  }  else {
      console.log("paduoda reiksme");

    }
}

nauja2(55);
console.log(nauja2);
