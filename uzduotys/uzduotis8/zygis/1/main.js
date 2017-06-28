


//-----------------------------------Pirma uzduotis------------------------------------------//

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];

masinosBagazine.push("butelis vandens");

masinosBagazine.unshift("ziebtuvelis");

var isimti = masinosBagazine.splice(2,1);




//-----------------------------------Antra uzduotis------------------------------------------//



var arr = new Array(50);

arr.fill(0);


//-----------------------------------Trecia uzduotis------------------------------------------//


var i = 0;
var whileArr = [];

while (i < 50){
    whileArr.push(1);
    i++;
}

//-----------------------------------Masyvai------------------------------------------//


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];



var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


//-----------------------------------ketvirta uzduotis------------------------------------------//




var index = [];

for(var i = 0; i < names.length; i++){

    if(names[i] === "Rico")
    index.push(i);
}


//-----------------------------------Penkta uzduotis------------------------------------------//



function findIndex(array, name){
    var nameIndex = array.indexOf(name);
    return nameIndex;
}

//-----------------------------------Sesta uzduotis------------------------------------------//


function findLastName(name){
    var vardoIndexas = names.indexOf(name);
    var pavarde = lastNames[vardoIndexas];

    return pavarde;
   
}
//-----------------------------------Septinta uzduotis------------------------------------------//





function rastiPavardes(name){

var vardoNumeriai = [];
var visosPavardes = [];

var i = 0;
var j = 0;


    for(i; i < names.length; i++){
        if(name === names[i]){
            vardoNumeriai.push(i);
        }
    }

    for(j; j < vardoNumeriai.length; j++){
        
        visosPavardes.push(lastNames[vardoNumeriai[j]]);

    }
    return visosPavardes;

}


//-----------------------------------Astunta uzduotis------------------------------------------//


// var random = Math.floor(Math.random() * 100);

var randomNumbers = new Array(10);

for (var i = 0; i < randomNumbers.length; i++){
    randomNumbers.push(Math.floor(Math.random() * 100));
}

// console.log(randomNumbers);
