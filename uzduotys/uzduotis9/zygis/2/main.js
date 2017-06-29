console.log(5555555);


//------------------------------masyvai--------------------------------//



var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// Uzduotis 1:  susiskurti darbuotojo obj., kuris saugo varda pavvarde, amziu, pagamintu detaliu skaiciu
// 2. sukurti “workers”  masyva. masyvas , kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja:
//    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)
//	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)





function worker(name, lastName, age, itemCount){
    this.name = name;
    this.lastName = lastName;
    this.age = age;
    this.itemCount = itemCount;
}


var workers = [];


for(var i = 0; i < names.length; i++){
    workers.push(new worker(names [i], lastNames[i], Math.floor(Math.random() * (65 - 18 + 1) + 18), Math.floor(Math.random() * 501)));
}




// function printArray(arr) {
//     arr.forEach(function(element){
//         console.log(element);
//     });
// }


function printArray(arr){
    for(x in arr){
        console.log(arr[x]);
    }
}


// function printArray(arr){
//     for(var i = 0; i < arr.length; i++){
//         console.log(arr[i]);
//     }
// }