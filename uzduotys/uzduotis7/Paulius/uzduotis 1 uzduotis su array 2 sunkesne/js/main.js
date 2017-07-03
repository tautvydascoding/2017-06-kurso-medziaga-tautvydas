////   1.susiskurti darbuotojo obj., kuris saugo varda pavarde, amziu, pagamintu detaliu skaiciu
////// 2. sukurti “workers”  masyva. masyvas , kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja:
//////    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)
//////	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
////// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)
//
//
// worker = {
//    vardas: "Andrius",
//    pavarde: "Dorosenko",
//    
//};



//------------while break-- uzduotis:----------------------------
// surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// uzduotis:--------------------------
// parasyti funkcija, kuri grazina masyvo elemento numeri
// uzduots:----------------------------
// rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes

// =====sukurti masyva 100 elementu ilgio naudojant FOR
//===== sukurti masyva 100 elementu ilgio naudojant WHILE

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

// pirma - prabegti per visa masyva su FOR

for (i = 0; i < names.length; i++) {
    if(names[i] === "Rico");               ////// tikrinam kiekviena nari
    console.log('Riko yra: ', names[i]);    
}

for (x in names) {
    if (names[x] === 'Rico') {
        console.log("radauuuuu" + x)
    }
}


var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
console.log("----------------IESKAU RIKO, jeigu nerandu pranesu--------")



var Arradome = false; /////// dar neradome
for (x in names) {
    if (names[x] === 'Rico') {
        arRadome = true; ///// isimename, kad radome        
    }
}

if (arRadome) { 
    console.log("Radome Riko");
} else {
    console.log("nieko neradamoe, bankyk kita fraze");
}

console.log("----------------IESKAU RIKO, end-----------------------")

//
//var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
//
//function rastiVarda(xx) {
//    for (y in names) { ///begam per masyva, nuo pradziu FOR reiskia begima per names - per kazka.
//        //// tikrinu ar masyvo vardas 
//        if (names[y] === xx); {
//            return y;
//        }
//    }
//}
//rastaReiksme = rastiVarda("Joy");
//
//console.log ('paieskomas' + vietaMasyve);

console.log("----------:DD-----DARBAS SU PAVARDEMIS, START--------------:DD--------")

vieta = rastiVarda("Sybil");
console.log("Sybil pavarde: " + lastNames[numerisMasyve])
