console.log("labas");

i = 0;
while (i < 25) {

  i++;
}

for (i = 0; i < 25; i++){ // IDEA: dazniausiai buna tokia eilute keiciasi tik kiek kartu norite (25 kartai)
  console.log("ate");
}
// IDEA: ------------------------- array / masyvai---------------------------------

names = ["Tomas", "Pietkus", 25, "VDU - inziniarija"];
console.log(names);
console.log(names.join());   // IDEA: names.join() atspauzdina viska array elementus vienoje eiluteje (atskiria kableliais)
console.log("masyvo ilgis " + names.lenght);


console.log("po rikiavimo " + names.join());
