function sendEmail (antraste, manoFunkcija) {
    /////siunciame email
    manoFunkcija(); /////// mokinames callback
    
}

var printStatus = function (){
  console.log("Email issiustas!!");  
    
};

var printError = function (){
  console.log("Email Neissiustas, jus nemokate naudotis PC!!");  
    
};

sendEmail("Uzsakymo nr. 1552", printError);

///////////ASOCIATYVUS MASYVAI////////////////
////////////////0        1        2         
var woman = ["Marija", "Meda", "1990"]; ///////// tai paprastas masyvas.

var man = []
man ["name"] = "tomas";
man ["lname"] = "meda";
man ["date"] = "1990";
    
console.log(man["date"] + " " + ["lname"]);
console.log("masyvas: ", man);







