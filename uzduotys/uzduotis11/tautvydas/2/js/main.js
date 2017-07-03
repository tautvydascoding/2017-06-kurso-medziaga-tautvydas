console.log("Karolis labas");

// viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){

   password = "asdfds";
    $("button").click(function(){
        $('p').hide();
    });

    // paspaudus ant straipsnio jis pasisleps
    $('p').click( function(){  // anonimine f-ja
        $(this).hide();
    });
    // nenaudojant anonimines f-jos
    $('p').click( paslepimas(this)); 
    function paslepimas(xx) {
       $(xx).hide(); // paslepe visus p
    }

});

// js - pati save iskviecianti f-ja ( ivykdys viska tarp "{ }")
(function() {
    console.log("iskvieciau save");
})();
