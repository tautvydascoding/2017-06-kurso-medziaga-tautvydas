console.log("Hello");

// $(document).ready(function(){ // viduje esantis kodas suveiks tik uzsikrovus puslapiui
//     $("button").click(function(){
//         $("p").hide();
//     });
// });

// paspaudus ant straispnio, jis pasisleps


$(document).ready(function(){ // viduje esantis kodas suveiks tik uzsikrovus puslapiui

  $("button").click(function(){
      $("p").hide();
  });

  $('p').click( function(){ //anonimine funkcija
    $(this).hide(4000, pranesimas2);
  });

  // $('p').click( paslepimas());
  // function paslepimas(xx) {
  //   $(xx).hide();
  // }

  $('h1').mouseenter(function() {
    alert('uzvedete pele an h1');
  });

  function pranesimas(text) {
    alert(text);
  }

  var pranesimas2 = function ( ) {
    alert("tekstas isnyko");
  };

});


(function () {
  console.log("iskvieciau save");
}) ();
