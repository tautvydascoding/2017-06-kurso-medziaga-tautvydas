console.log("valio");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

// surasti kelintas yra Rico//

for (y in names) {
  console.log("reiksme1: " + names[y]);


  if (names[y] == "Rico") {
    console.log("Pirmas Rico!!!!!!!!!!!!!!!!!!!!!!!!!");
    break;
  }
}
// ////////end///////////////
console.log("=====================================================================");
//  surasti visus Rico ///////


for (x in names) {

  if (names[x] === "Rico") {
    console.log("---Visi Rico---" + x);
  }
}
// ////////////end////////////////////



for (x in names) {

  if (names[x] === "Rico") {
    console.log("---Visi Rico---" + x);
  }
}

// 2) parasyti funkcija, kuriai davus ieskoma zodi, ji suranda jo vieta masyve (stalciaus numeri)////

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
// ///////ieskom////////////////////////////
function rastiVarda(ieskomasVardas) {

  for (y in names) {

  if (names[y] == ieskomasVardas) {
    return y;
    }
  }
}
vietaMasyve = rastiVarda("Joy");
console.log("ieskomas: " +"Joy " + vietaMasyve);
// /////////////////end//////////////////////
