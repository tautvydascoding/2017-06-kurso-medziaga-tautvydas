console.log("labas");
// ----------puslapio nustaytmai---------

//  --------------FOR ciklai-----------------

i = 0;
while (i < 50) {
  //  code ...
  i++;
}

for (i = 0;  i < 50; i++ ) {
   // code ...
}

// naudojant For cikla - isvesti i console 25 tekstus
for (i = 0;  i < 25; i++ ) {
  console.log("tekstas" );
}

// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inziniarija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );


// surikiuojame
names.sort();
console.log("po rikiavimo: " + names.join());

masyvoIlgis =  names.length;
for (i = 0; i < masyvoIlgis; i++){
  console.log( names[i] );
}





//
