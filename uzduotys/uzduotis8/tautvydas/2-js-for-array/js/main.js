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

names.push("3 vaikai");
console.log("masyvas po papildymo: " + names.join());
names[20] = "1986-06-03";
console.log("masyvas po papildymo: " + names.join());

testai = [40];           // sukuria viena stalciu testai[0] = 40;
testai2 = new Array(40); // sukuria 40 tusciu stalciu
console.log("testai [ 40] :  ", testai);
console.log("testai2 [ 40] :  ", testai2);

console.log("array " + names.toString() );  // masyvo visus elementus pavercia i viena teksto eilute
console.log("array " + names.join(" : ") ); // isvesa visa masyva vienoje eiluteje, atskiriant elementus/stalcius nurodytu skirtuku " : "

names.pop(); // istrina paskutinta masyvo elementa/stalciu
console.log("masyvas po paskutintio elm. istrinimo:", names.toString());
names.shift();
console.log("masyvas po pirmo elm. istrinimo:", names.toString());


delete names[1];
console.log("masyvas po 1 elm. delete:", names.toString());

names.splice(1,0,"garstycios", "zongliruoti");
console.log("masyvas po splice - poros elm. idejimo", names.toString());
names.splice(1, 2);
console.log("masyvas po splice - istrynem idetus", names.toString());


names.slice(1); //
console.log("masyvas po slice 1: " + names.join("-"));
dalisVardu = names.slice(3); // copy nuo trecio masyvo elemento
console.log("masyvas po slice 3: " + dalisVardu.join("-"));
console.log("masyvas po slice 1: " + names.join("-"));




//
