console.log("sveiki");

var salis = {
  miestas: "Kaunas",
  name: "tetis",
  getCity: function() {
    miestas = "Vilnius"; // IDEA: local / private kuriamas naujas kintamasis
    var name = "vaikas"; // IDEA: local / private kuriamas naujas kintamasis
    console.log("getCity miestas: ", miestas);
    console.log("getCity name: ", name);

    console.log("getCity this.miestas: ", this.miestas);
    console.log("getCity this.name: ", this.name);

    var that = this;

    function printSkrynia() {
      var name = "anukas";
      miestas = "Klaipeda"; // IDEA: keiciame global kintamaji
      console.log("printSkrynia: ", name);
      console.log("printSkrynia miestas: ", miestas);

      console.log("printSkrynia this.name: ", this.name);
      console.log("printSkrynia this.miestas: ", this.miestas);
      console.log("printSkrynia THAT.name: ", that.name);
      console.log("printSkrynia THAT.miestas: ", that.miestas);
    }
    printSkrynia();
  }
};
salis.getCity(); // IDEA: iskvieciam funkcija kuri yra objekto viduje
