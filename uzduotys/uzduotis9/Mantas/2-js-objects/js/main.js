console.log("labuka");

 var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
 var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



//  for ( y in names) {
//    if(names[y] == "Rico") {
//      console.log("Radau Rico.");
// } else {
//   console.log("Nepavyko rasti..Bandykite kita zodi");
// }
// };

// function ieskauVardo( x ) {
//   for ( y in names) {
//   if(names[y] == x) {
//     console.log("Radau", x, "Vieta masyve: ", y);
// } else {
//   console.log("Nerasta. Bandykite kita zodi");
// }
// }
// }
// ieskauVardo("Regan");


var radom = false;
function ieskauVardo( x ) {
  for ( y in names) {
  if(names[y] == x) {
    radom = true;
    console.log("Radau", x, "Vieta masyve: ", y);
}
}
  if( radom ) {
    console.log("Radau", x, "Vieta masyve: ", y);
  } else {
    console.log("Bandykite kita zodi")
  }

}
ieskauVardo("Sybil");

//////////
///ieskau pavardes///
// function ieskauPavardes ( x ) {
//     for ( y in names) {
//     if(names[y] == x) {
//       radom = true;
//       console.log("Radau", x, "Vieta masyve: ", y);
//   }
//   }
//     if( radom ) {
//       console.log("Radau", x, "Vieta masyve: ", y);
//     } else {
//       console.log("Bandykite kita zodi")
//     }
// }
vieta = ieskauVardo(x);
console.log("Pavarde: " + lastNames[vieta]);
