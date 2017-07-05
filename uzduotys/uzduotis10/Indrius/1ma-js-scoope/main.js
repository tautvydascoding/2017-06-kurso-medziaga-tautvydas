console.log("valio");


vardas = "globalus"; //kuriam globalu kinatamaji//

console.log("vardas: " + vardas);

function test() {
  console.log("funkcijoje vardas: " + vardas);

  var pavarde = "Pavardenis"; //sukuriam local kintamaji//
  console.log("funkcijoje vardas: " + pavarde);


  vardas = "Vardenis";
  console.log("funkcijoje vardas po priskirimo: " + vardas);
var vardas = "lokalus";
console.log("funkcijoje vardas: " + vardas);
console.log("funkcijoje globalus vardas: " + this.vardas); //islypa per viena riestini skliauta (scoopa)
}

// test (); ///iskviecia funckicja///

if ( 1 === 1) {

    var pavarde = "Pavardenis"; //sukuriam local kintamaji//
    console.log("funkcijoje vardas: " + pavarde);


    vardas = "Vardenis";
    console.log("funkcijoje vardas po priskirimo: " + vardas);
  var vardas = "lokalus";
  console.log("funkcijoje vardas: " + vardas);
  console.log("funkcijoje globalus vardas: " + this.vardas); //islypa per viena riestini skliauta (scoopa)
  }

// uzduotis sukurti objekta salis///

var salis = {
miestas : "Kaunas",
name: "tetis", //privatus kintamasi//
getCity: function () {
  console.log("getCity miestas: ", this.miestas);
  console.log("getCity name: ", this.name);

  miestas = "Vilnius";
  var name = "vaikas";
  console.log("getCity miestas: ", miestas);
  console.log("getCity name: ", name);

  console.log("getCity this.miestas: ", this.miestas);
  console.log("getCity this.name: ", this.name);

var that = this; //reikia kurti nauja var //

function printSkrynia() {
  var name = "anukas";
  var miestas = "Klaipeda";
  console.log("printSkrynia name: ", name);
  console.log("printSkrynia miestas: ", miestas);

  console.log("printSkrynia this.name: ", this.name);
  console.log("printSkrynia this.miestas: ", this.miestas);

console.log("printSkrynia that.name: ", that.name);

}
printSkrynia ();
}
  };

  salis.getCity();
