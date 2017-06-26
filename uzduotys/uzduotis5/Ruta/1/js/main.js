console.log('Hello');

var name = "Tomas";
var age = 22;
var married = false;
var died = null;

x = 50;
y = 1;
z = (x + y) /4 ;

console.log(" z reiksme: " + z);

function countAverage() {
  var a = 15;
  var b = 25;
  var c = 0;
  var z = (a + b + c) / 3;

  console.log ("vidurkis: ", z);
}

countAverage();


function printName() {
  var name = "Tomukas";
  var lname = "Tolutis";
  console.log("vardas = ", name, lname);

  var straipsnis = "Labas rytas " + name + ". Kaip tau siandien sekesi?";
  console.log(straipsnis);
}

printName();
