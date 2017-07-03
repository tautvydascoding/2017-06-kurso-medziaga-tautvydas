console.log("tadas");

//===========callback=================================
function sendEmail( antraste, manoFunkcija) { //callback
  //coda siunciame email//

  manoFunkcija();

}
var printStatus = function () {
  console.log("Emailas issiustas");

};
var printError = function () {
  console.log("Emailas neissiustas!");

};
sendEmail("Uzsakymo nr: 152", printError );
//=================ASOCIATYVUS MASYVAI==============================
//             0          1           2
var woman = ["Marija", "Haratija", 1966];
var man = [];
  man["name"] = "Tomas";
  man["lname"] = "Haratija";
  man["date"] = "1998";

console.log( "vardas " + man["name"]);
console.log("masyvas: ", man);
//////////////////////////////////////////////
