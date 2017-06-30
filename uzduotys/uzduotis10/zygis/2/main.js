var salis = {
    miestas: "Kaunas",
    name: "tevukas", //sukurtas lokalus kintamasis
    getCity: function(){
        console.log("getCity(this)", this.miestas, this.name);
        miestas = "Vilno";
        name = "vaiks";
        console.log("getCity()", miestas, name);

      var that = this;

        function printSkrynia(){
             name = "anukas";
            miestas = "Klaipeda"; //prvadinam kintamaji esanti aukstu auksciau

            console.log("printSkrynia()", miestas, name);
            console.log("printSkrynia(this)", this.miestas, this.name); //cia rodo kazkaip ne taip kaip turetu

            

            console.log("printSkrynia(that)", that.miestas, that.name);
        }

        printSkrynia();
    }
    

};


salis.getCity();