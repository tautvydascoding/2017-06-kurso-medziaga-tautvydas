console.log("labas");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

i = 0;
for (x in names) {
    if( names[x] == "Rico") {
      console.log("Rico found, he is #" + i);
      break;
    }
  i++;
}

for (x in names) {
  if( names[x] == "Rico")
  console.log("found with name of " + names[x]);
}
console.log("");


i = 0;


function rastiPavardes (y) {
  for (x in names) {
      if( names[x] == y) {
        vietaMasyve = i;
        console.log("Nr." + i + " Rico pavarde: " + lastNames[vietaMasyve]);
      }
    i++;
  }
}

var rastiPavardes = prompt("Iveskite darbuotojo varda");
