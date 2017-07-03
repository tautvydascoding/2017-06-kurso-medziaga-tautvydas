console.log("tadas");

// ===============callback=========================
function sendEmail ( antraste, manoFunkcija) { // callback
  // code siunciame email ..
  // ....
  manoFunkcija();
}


var printStatus = function () {
  console.log("Emailas issiustas");
};
var printError = function () {
  console.log("Emailas NEISISUSTAS. NEUZPILDET LAUKU!!");
};


sendEmail("Uzsakymo nr: 152", printError );
// =============== ASOCIATYVUS MASYVAI =========================

//                0         1         2
var woman  = ["Marija", "Haratija", 1966];
var man    = [];
// js nera ASOCIATYViu masyvu (po viena galime issivardinti)
 man["name"] = "Tomas";
 man["lname"] = "Golipotas";
 man["date"] = "1978";

 console.log( "vardas " + man['name'] + " " +  man['lname']);
 console.log("masyvas: ", man );







//
