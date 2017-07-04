console.log("Karolis labas");

// viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){


  $('h1, h2').css("background-color", "red");


  // uzduotis :
  // paspausdus ant prekes nuotraukos - nuotrauka turi sumazeti iki 20px ir nuvaziuoto i ekrano kampa virsuje, tapti permatoma

  //=== sprendimas===
  $('.w3-row img').click( function(){
    // this - paima konktetu paveiksliuka ant kurio paspaudei

    // nusikopijuojame paspausta paveiksliuko Obj
   var paveikslelioObjKopija = this.cloneNode(true);
   var imgParent = this.parentNode; // tevinis DOM elementas
 

   // i HTML idedame savo HTML elementa (paveikslelioObjKopija)
     imgParent.insertBefore(paveikslelioObjKopija,this);


    // js BUG - pirma pasiskelbti aboliuciu, kad teisingai issiskaiciuuotu teva (reletive)
    $(this).css({
      position : "absolute",
      width: "18%"
    });

    $(this).animate({
         width: "10px",
         height: "10px",
         opacity: 0,
         top: 0,
         right: "27px"
     }, 2000);
  });

});
