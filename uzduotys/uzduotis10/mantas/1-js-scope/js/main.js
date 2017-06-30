console.log("labukas");


// vardas = "globalus"; //kuriam globalu kintamaji (bendrabucio virtuve)
// console.log("vardas: " + vardas);
//
// function test() {
//   console.log("funkcijos viduje spausdiname varda: " + vardas);
//
//   var pavarde = "Pietkauskai"; //susikuriame lokalu kintamaji
//   console.log("funkcijoje pavarde: " + pavarde);
//   vardas = "Tomas";
//   console.log("funkcijoje vardas po naujo priskirimo: " + vardas);
//   var vardas = "local"; //susikuriame lokalu kintamaji
//   console.log("funkcijoje vardas: " + vardas);
//   console.log("funkcijoje globalus vardas: " + this.vardas); //islipa viena pakopa auksciau
//
// }

// test();

var salis = {
  miestas: "Kaunas",
  name: "tetis", //lokalus kintamasis
  getCity : function () {
    console.log("GetCity Miestas: ", this.miestas);
    console.log("GetCity Name: ", this.name);
    miestas = "Vilnius"; //lokalus kuriamas naujas kintamasis
    var name = "vaikas"; //lokalus kuriamas naujas kintamasis
    console.log("GetCity Miestas: ", miestas);
    console.log("GetCity Name: ", name);
    console.log("GetCity this Miestas: ", this.miestas);
    console.log("GetCity this Name: ", this.name);

    var that = this; //issaugom visa teva
    function printSkrynia() {
        var name = "anukas";
        var miestas = "klaipeda"; //keiciame globalu kintamaji
        console.log("Esame printSkrynia: ", name);
        console.log("Esame printSkrynia: ", miestas);

        console.log("Esame this.printSkrynia: ", this.name); //this mato vienu auksciau
        console.log("Esame this.printSkrynia: ", this.miestas);

        console.log("Esame that.printSkrynia: ", that.name); //this mato vienu auksciau
        console.log("Esame that.printSkrynia: ", that.miestas);
      }
      printSkrynia();
      }
};

salis.getCity(); // iskvieciam f-ja, kuri yra objekto viduje
