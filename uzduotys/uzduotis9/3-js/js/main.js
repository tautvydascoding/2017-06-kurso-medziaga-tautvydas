console.log("labas");

// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


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
if ( arRadome) {  //arRadome === true        !arRadome => arRadome == false
  console.log("Radome Riko");
} else {
  console.log("Nieko neradome...Bnadykite kita fraze");
}


// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri

console.log("----------Ieskau vardo pozicijos -------");

function rastiVardoPozicija (ieskomasVardas) {
  for (y in names) { // begam per masyva, nuo pradzio iki galo
    // tikrinu ar masyvo stalciaus vardas yra ieskomas zodis
    if (names[y] === ieskomasVardas) {
      return y;   // graziname - y stalciaus numeris
    }
  }
}
vietaMasyve = rastiVardoPozicija("Joy");
console.log("ieskomoo zodzio vieta: " + vietaMasyve);


// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
console.log("----------Ieskau zmogaus pavardes pagal uzduota varda  -------");

numerisMasyve = rastiVardoPozicija("Sybil");
console.log("Sybil pavarde: " + lastNames[numerisMasyve]);

// funkcija kuri gauna pavarde pagal uzduota varda
function getLastName(name) {
  numerisMasyve = rastiVardoPozicija(name);
  return lastNames[numerisMasyve];
}


//
