//-----------------------------------Masyvai------------------------------------------//


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];



var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


var items = [64, 27, 89, 99, 89, 53, 52, 39, 77, 56, 91, 56, 92, 49, 90, 63, 51, 84, 28, 49, 57, 61, 66, 73, 57, 93, 98, 64, 63, 41, 3, 39, 58, 43, 56, 60, 22, 57, 38, 8, 12, 93, 28, 83, 77, 63, 96, 45, 34, 79];

//-----------------------------------Astunta uzduotis------------------------------------------//



function randomArray(length, minNum, maxNum) {

    var randomNumbers = [];

    for (var i = 0; i < length; i++) {
        randomNumbers.push(Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
    }
    return randomNumbers;
}



//-----------------------------------Devinta uzduotis------------------------------------------//


var index = items.indexOf(Math.max.apply(Math, items)); // randa didziausio masyvo skaiciaus indexa


//kitas budas

var max = items[0];
var maxIndex = 0;

for(var i = 0; i < items.length; i++){
    if (items[i] > max){
        maxIndex = i;
        max = items[i];
    }
}

