console.log("pew pew pew")


//--------------------OBJEKTAS---------------------------//

zmogus = {
    vardas: "Tomas",
    amzius: 13,
    ak: 30411269874
};


//console.log("name: " + zmogus.vardas);


//for ciklas kuris eina per objekta ir visa jame esancia informacija

for (x in zmogus){
    console.log("reiksme: " + zmogus[x]);
}


var vardai = ["Jonas", "Tomas", "Albinas", "siaip dar vienas vardas"];

//ciklas skirtas eiti per masyva

vardai.forEach(function(element) {
    console.log(element);   
});


for(i in vardai){
    console.log(vardai[i]);
    if(vardai[i] == "Albinas")
    break;
}