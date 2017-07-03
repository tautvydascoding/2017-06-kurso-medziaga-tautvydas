function sendEmail(antraste, callback){  //nebutina vadinti callback, bet toks yra kaip ir susitarimas
    callback();
}


var printStatus = function(){

    console.log("Jusu pranesimas issiustas");

};



var printError = function(){
    console.log("kazkas ne taip");
}


sendEmail("Antraste", printError);


//=======================CALLBACK END===========================================//





//=======================ASOCIATYVUS MASYVAI===========================================//
//=================JavaScripte ju kaip ir nera, jie vistiek veikia kaip objektai



var man = [];


man["name"] = "Antonas"; //gaima padaryt iliuzija, kai i masyva priskirineji po viena atskirai elementa
man["lname"] = "Baratjevas"; 
man["date"] = "1944"; 


//console.log("vardas:", man['name'], "pavarde", man['lname']);

console.log("masyvas:", man);``



