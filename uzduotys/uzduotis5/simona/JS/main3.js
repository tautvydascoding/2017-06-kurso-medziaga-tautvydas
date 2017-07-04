console.log("labas");

//IDEA Azuolas
y = 0;
while (y < 50) {
  console.log("Azuolas" + y); //ne atnaujinti puslapio, nes amzinai tikrins sioje vietoje
  y = y + 1;
}


//IDEA uzduotis 1

function namePrint(reiksme) {  // tai yra salyga ir cosole.log yra salygos dalis - ka mes su viskuo ketiname daryti. "reiksme" laikinas kintamasis, kuris gauna reiksme kvietimo metu (namePrint(x))
  console.log(reiksme);
}
x = 0;
while (x < 150) {
  namePrint(x);
  x = x + 1; //didiname reiksme, kad pasiektu 150
}
