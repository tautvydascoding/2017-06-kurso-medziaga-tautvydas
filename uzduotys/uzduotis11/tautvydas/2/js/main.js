console.log("Karolis labas");

// viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){

   password = "asdfds";
    $("button").click(function(){
        $('p').hide();
    });


});

// js - pati save iskviecianti f-ja ( ivykdys viska tarp "{ }")
(function() {
    console.log("iskvieciau save");
})();
