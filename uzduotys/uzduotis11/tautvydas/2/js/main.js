console.log("Karolis labas");

// viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){

    $("button").click(function(){
        // $('p').fadeToggle( 1000);
        $('p').slideToggle( 1000);

        // similar behavior as an HTTP redirect
        window.location.replace("http://google.com");
    });

    // paspaudus ant straipsnio jis pasisleps
    $('p').click( function(){  // anonimine f-ja
        $(this).hide(4000, pranesimas);
    });
    // // nenaudojant anonimines f-jos
    // $('p').click( paslepimas(this));
    // function paslepimas(xx) {
    //    $(xx).hide(); // paslepe visus p
    // }

    $('h1').mouseenter( function() {
         alert('uzvedete pele ant h1');
    });

    function pranesimas( ) {
      alert("tekstas isnyko");
    }
    //  arba
    var pranesimas2 = function ( ) {
      alert("tekstas isnyko");
    }


    // $("button").click(function(){
    //     $(".mybox").animate({
    //     	position: 'absolute',
    //         left: '250px',
    //         opacity: '0.5',
              // height: '+=150px',   // kiek nuo daabrtinio dydzio dar padidinti
              // width: '150px'		// iki kokio dydzio didinti
    //     });
    // });

  //   $("div").animate({
  //   width: 'toggle'
  // });

});

// js - pati save iskviecianti f-ja ( ivykdys viska tarp "{ }")
(function() {
    console.log("iskvieciau save");
})();
