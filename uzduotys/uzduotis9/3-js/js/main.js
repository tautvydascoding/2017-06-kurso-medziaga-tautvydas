console.log("labas");

// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri
// uzduots:----------------------------
// rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

// 1A)
for ( i = 0; i < names.length; i++) {
  // console.log( names[i]);
  if (names[i] === "Rico") {
    console.log("----Radau Rico----");
    break;
  }
}

// 1A arba
for ( x in names) {
  // console.log( names[i]);
  if (names[x] === "Rico") {
    console.log("----Radau Rico----riko yra: " + x);
  }
}

// 1B
console.log("----------Ieskau Riko, jeigu nerandu pranesu-------");

var arRadome = false; // neradome dar
for ( x in names) {
  // console.log( names[i]);
  if (names[x] === "Rico") {
    arRadome = true; // isimename, kad radome
  }
}
// kai atlikom paieska, pasitikrinti ar radome
if ( arRadome) {
  console.log("Radome Riko");
} else {
  console.log();
}








//
