console.log("tadas");


 vardas = "globalus";  // sukuriam GLobal kintamaji (bendrabucio virtuve- jis viesas)

 console.log("vardas: " + vardas);

function test() {
  console.log("funkcijoje vardas: " + vardas);

  // sukuriam Local / private kintamaji (kadangi jis bendrabucio kambaryje, todel jis privatus)
  var pavarde = "Pietkauskai";
  console.log("funkcijoje pavarde: " + pavarde);

  vardas = "Tomas";
  console.log("funkcijoje vardas po pakeitimo: " + vardas);

  // sukuriam Local / private kintamaji (kadangi jis bendrabucio kambaryje, todel jis privatus)
  var vardas = "Local";
  console.log("funkcijoje vardas: " + vardas);
  console.log("funkcijoje globalus vardas: " + this.vardas); // this mato aukstesnius kintamuosius
}

// test();


// uzduotis:
// sukurti obj "salis":
// su kintamaisiais "miestas" , "name", ir su f-ja getCity()
//
var salis = {
      miestas: "Kaunas",
      name: "tetis",      // sukurem kintamaji Local / private
      getCity: function () {
          console.log("getCity this.miestas: ", this.miestas);
          console.log("getCity this.name: ", this.name);
          miestas = "Vilnius";      // locoal / private   kuriamas naujas kintamasis
          var name = "vaikas";      // locoal / private   kuriamas naujas kintamasis
          console.log("getCity miestas: ", miestas);
          console.log("getCity name: ", name);

          console.log("getCity this.miestas: ", this.miestas);
          console.log("getCity this.name: ", this.name);

          var that = this; // issisaugome visa teva

          function printSkrynia() {
                var name = "anukas";
                miestas = "Klaipeda";  // keiciame global kintamaji
                console.log("printSkrynia name: ", name);
                console.log("printSkrynia miestas: ", miestas);

                console.log("printSkrynia this.name: ", this.name); // this mato vienu "{" aukstesnius kintamuosius
                console.log("printSkrynia this.miestas: ", this.miestas);

                console.log("printSkrynia THAT.name: ", that.name);
                console.log("printSkrynia THAT.miestas: ", that.miestas);
          }
          printSkrynia();
      }
};
salis.getCity(); // iskvieciama f-ja, kuri yra objekto viduje

// kintamasis "gerijonas" kuris yra objektas ir saugo:
// kintamuosius "rajonas" ir f-ja "getArea()"










//
