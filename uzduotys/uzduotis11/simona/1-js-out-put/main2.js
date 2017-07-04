console.log("Laura");

function sendEmail(antraste, manoFunkcija) { //callback pervadintas i manoFunkcija || jei renkames Error eilute, tai antraste siejasi su paskutines eilutes "Order number: 152", o manoFunkcija susijusi su paskutines eilutes printError. Jei noretumem paimti "email sent", tada
  //code siunciam email
  manoFunkcija();
}

var printStatus = function() {
  console.log("email has been sent");
};
var printError = function() {
  console.log("Error while sending email. Please check the empty fields");
};

sendEmail("Order number: 152", printError);


//==============ASOCIATYVUS MASYVAI================
//           0 stalc.   1 stalc.   2 stalc.
var woman = ["Marija", "Heratija", 1966];
var man = []; //JS nera asociatyviu masyvu
  man ['name']="Tomas";
  man ['lname']="Golipotas";
  man ['date']="1966"

console.log("vardas" + man['name']);
console.log("masyvas", man);
