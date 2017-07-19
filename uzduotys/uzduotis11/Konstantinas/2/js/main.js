console.log("Karolis labas");

// viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){

   password = "asdfds";
    $("button").click(function(){
		//$('p').fadeToggle(1000);
        $('p').sladeToogle(1000);
    });

    // paspaudus ant straipsnio jis pasisleps
    $('p').click( function(){  // anonimine f-ja
        $(this).hide(4000),pranesimas("aaa");
    });
    // nenaudojant anonimines f-jos
    $('p').click( paslepimas(this)); 
    function paslepimas(xx) {
       $(xx).hide(); // paslepe visus p
    }
    });
}); 

    function pranesimas() {
		alert("tekstas isnyko");
    }
	// arba

// js - pati save iskviecianti f-ja ( ivykdys viska tarp "{ }")
function {
    console.log("iskvieciau save");
})();

//  $("button").click(function(){
  //    $(".mybox").animate({
   //        left: '250px',
    //       opacity: '0.5',
     //      height: '150px',// kieknuo dabart. didzio  padidina
     //      width: '150px' // iki kokio didzio didinti
     //   });
//}); 
