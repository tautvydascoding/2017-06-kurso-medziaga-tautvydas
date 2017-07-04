console.log("labas s");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// Surandam pirmąjį Rico
for (i = 0; i < names.length; i++) {
  if (names[i] === "Rico") {
    console.log("-------Found Rico!-------");
    break;
  }
}
// Surandam visus Rico
for (i = 0; i < names.length; i++) {
  console.log(names[i]);
  if (names[i] === "Rico") {
    console.log("------Found Rico!--------");
  }
}
// Jeigu nepavyko surasti tokio vardo
for (x in names) {
  if (names[x] === "Rico") {
    console.log("Found Rico!" + x);
  }
}

var arRadom = false; //neradome dar
for (x in names) {
  // console.log(names[i]);
  if (names[x] === "Albert") {
    arRadom = true;
  }
}
// kai atlikom paiešką, pasitikrinti, ar radome
if (!arRadom) { // šauktukas reiškia, kad tikrina, ar false    !arRadome => arRadome == False
} else {
  console.log("Nepavyko rasti");
}

//Uzduotis nr 2: parašyti f-ją, kuriai davus ieškomą žodį, ji suranda jos vietą
function rastiVarda(ieskomasVardas) { //ieškome "stalčiaus" numerio
  for (y in names) { //begam per masyva nuo pradzios iki galo. Tikrinu, ar masyvo stalciaus vardas lygus ieskomam vardui
    if (names[y] === ieskomasVardas) {
      return y;
    }
  }
}
vietaMasyve = rastiVarda("Joy"); {
  console.log("ieskomo zodzio vieta:" + vietaMasyve);
}

//3) Rasti pavardę masyve žmogaus, turinčio varda "Freida" (pirmojo)

//variantas nr1
numerisMasyve = rastiVardoPozicija("Sybil");
console.log("Sybil pavarde: " + lastNames[numerisMasyve]);

//funkcija, kuri gauna pavarde pagal uzduota vardas
function getLastName(name) {
  numerisMasyve = rastiVardoPozicija(name);
  return lastNames[numerisMasyve];
}
