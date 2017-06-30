console.log("labas");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// IDEA: 1 budas
for (i = 0; i < names.length; i++) {
  // console.log(names[i]);
  if (names[i] === "Rico") {
    console.log("------radau rico------");
    break;
  }
}
// IDEA: 2 budas
for (x in names) {
  if (names[x] === "Rico") {
    console.log("------radau rico------ riko yra:" + x);
  }
}
// IDEA: 2 uzduotis

console.log("-----------ieskau Rico, jeigu nerasiu pranesiu------------");

var arRadome = false; // IDEA: neradom dar
for (x in names) {
  if (names[x] === "Rico") {
    arRadome = true; // IDEA: isimename, kad radom
  }
} // IDEA: kai atliko paieska, pasitikrinti ar radom
if (arRadome) { // IDEA:  arRadome = true;  arRadome => arRadome == false
  console.log("radom riko");
} else {
  console.log("------radau rico------ riko yra:" + x);
}



function rastiVarda(ieskomasVardas) {
  for (y in names)     // IDEA: bega per masyva name nuo pradziu iki galo
  // IDEA: tikrinu ar masyvo stalciaus vardas yra ieskomas zodis
    if (names[y] === ieskomasVardas) {
      return y; // IDEA: y yra stalciaus numeris
    }
}
vietaMasyve = rastiVarda("Joy")
console.log("ieskomo zodzio vieta: " + vietaMasyve);

// IDEA: rasti pavarde masyve esancio zmogaus vardu freida

console.log("-----------ieskau pavarde, pagal uzduota varda------------");


vieta = rastiVarda("Sybil")
console.log("Sybil pavarde: " + lastNames[vieta]);

function rastiPavarde(ieskomasVardas) {
  for (y in lastNames)
    if (lastNames[y] === ieskomasVardas) {
      return y;
    }
}
vietaMasyve = rastiPavarde("Freida")
console.log("ieskomo zodzio vieta: " + vietaMasyve);
