console.log("labas");


vardas = "globalus"; //kuriam globalu kintamaji
console.log("vardas:" + vardas); // bendrabucio virtuve

function test() {
  console.log("f-ijos viduje:" + vardas);

  //sukuriam local/privatu kintamaji, kadangi jis yra bendrabucio viduje
  var pavarde = "Pietkauskai"; //sukuriam local kintamaji
  console.log("f-ijos viduje pavarde po pakeitimo:" + pavarde);

  //sukuriam local/privatu kintamaji, kadangi jis yra bendrabucio viduje
  vardas = "Tomas";
  console.log("f-ijos viduje vardas po pakeitimo:" + vardas);

  //sukuriam local/privatu kintamaji, kadangi jis yra bendrabucio viduje
  var vardas = "local";
  console.log("funkcijoje vardas:" + vardas);
  console.log("funkcijoje vardas:" + this.vardas); //jei panaudojame f-ijoje "this." išlipa viena pakopa aukščiau, kitaip tariant, vienu {} skliaustu aukščiau. This. galima ir nevartoti, nebent pradetume naudoti vienodus vardus IF ar visam masyve
}
//be test gale f-ija neveiks, nes visa si f-ija yra uzdara    tai: test();

//uzduotis:
//sukurti obj "salis":
//su kitamaisiais "miestas", ir su f-ija "getCity"

//kintamasis "regionas", kuris yra objektas ir saugo:
//kintamuosius "rajonas" ir f-ija "getArea()"

var salis = {
  miestas: "Kaunas",
  name: "tetis", //susikurem privatu kintamaji
  getCity: function() {
    console.log("getCity this.miestas:", this.miestas);
    console.log("getCity this.name:", this.name);

    miestas = "Vilnius"; //local/private
    var name = "vaikas"; //local/private
    console.log("getCity miestas:", miestas);
    console.log("getCity name:", name);

    console.log("getCity islipimas this.miestas:", this.miestas);
    console.log("getCity islipimas this.name:", this.name);

    var that = this; //su that sukuriame visiskai nauja kintamaji ir su "this" nurodome visus pries tai buvusius veiksmus iki "{}". That eilute rasome f-ijos gale

    function printSkrynia() {
      miestas = "Klaipeda"; //keiciam global kintamaji jei rasytume be var, jis nekurtu naujo kintamojo, o i ta pati stalciuka irasytu Vilnius - Klaipeda. Su var, tai sukuriam nauja stalciuka su vardu Klaipeda
      var name = "anukas";
      console.log("printSkrynia islipimas name:", name); //this mato vienu "{}" aukstesnius kintamuosius
      console.log("printSkrynia islipimas miestas:", miestas);

      console.log("printSkrynia islipimas name:", this.name); //this mato vienu "{}" aukstesnius kintamuosius
      console.log("printSkrynia islipimas miestas:", this.miestas);

      console.log("printSkrynia islipimas name:", that.name); //this mato vienu "{}" aukstesnius kintamuosius
      console.log("printSkrynia islipimas miestas:", that.miestas);
    }
    printSkrynia();
  }
};
salis.getCity(); //iskvieciam f-ija, kuri yra objekto viduje, su tašku
