console.log("tadas");

// IDEA: ===================callback========================

function sendEmail(antraste, manoFunkcija) { // IDEA: callback
  // IDEA: siunciam email
  manoFunkcija();
}

var printStatus = function() {
  console.log("Emailas issiustas");
};
var printError = function() {
  console.log("Emailas neissiustas");
};

sendEmail("Uzsakymo nr: 152", printError);
// IDEA: =========================================================

// IDEA: -----------------------asociatyvus masyvai--------------------------

var woman = ["marija", "haratija", 1966];
var man = [];

man["name"] = "tomas";
man["lname"] = "golipotas";
man["date"] = "1978";

console.log("vardas" + man['name']);
console.log("masyvas: ", man);
