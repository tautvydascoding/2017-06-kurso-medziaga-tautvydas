console.log("labas");
// ----------puslapio nustaytmai---------

// Uzduotis:
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate
// 1B) Paleisti funkcija 20 kartu
// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")

// 1)
// sukuriam f-ja (! j inei karto nesuveikia)
function spausdinti (xx, yy) {
    console.log("reiksme: " , xx, " sekanti reikeme: ", yy);
}
// issaukiame f-ja, kad ji atliktu darba
spausdinti(11111, 7777);
// 1A)
for (i = 0; i < 20; i++) {
  spausdinti(222, "gile"); // iskvieciu f-ja
}
// 1A naudojant WHILE
t = 0;
while (t < 20) {
  spausdinti(444, "kastytis"); // iskvieciu f-ja
  t++;
}
// 2
function print (x = "nepaduota reikme") {
  console.log(x);
}
print();
// 2 - kitaip
function print2 ( x ) {
  if (x === undefined) {
     console.log("neduota reikme") ;
  } else if (isNaN(x)){
      console.log("paduota reikme NE skaicius!!!") ;
  } else {
      console.log("paduota reikme skaicius") ;
  }
}
print2 (666);
