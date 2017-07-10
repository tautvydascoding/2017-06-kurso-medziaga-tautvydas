console.log("tadas");

// =========CALLBACK=======
function sendEmail ( antraste, manoFunkcija) { // callback
  // code siunciame email
  manoFunkcija();
}

var printStatus = function () {
  console.log("Email issiustas");
};

var printError = function () {
  console.log("Email neissiustas, istaisykite klaidas");
};

sendEmail("Uzsakymo nr: 152", printError);

console.log("");

// =========ASOCIATYVUS MASYVAI========

var woman = ["Marija", "Haratija", 1966];
var man = {
  "name": "Tomas",
  "lname": "Haratija",
  "date": 1998
};

console.log( "vardas: " + man["name"]);
console.log( "masyvas: ", man);
