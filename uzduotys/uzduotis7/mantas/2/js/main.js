console.log("funkcijos");



nevedes = true;
while (nevedes) {
  console.log("testuoju while cikla");
  nevedes = false;

}


// 50 kartu//
i = 0;
while (i < 50) {
  console.log("Azuolas" + i);
  i = i + 1;
}

// nauja uozduotis.
function print ( x ) { //reiksme - laikinas kintamasis, kuris gauna kvietimo metu suteikiama reiksme
  console.log("reiksme : " , x);
}

i = 0;

while (i < 150) {
  print(i);  //kvieciam f-ja
  i = i + 1; //didiname i reiksme, kad pasiektu 150
}
//
i = i + 1; //tai yra tas kas i++; arba atvirksciai k--;
i += 1; // i+1 prilygins 
