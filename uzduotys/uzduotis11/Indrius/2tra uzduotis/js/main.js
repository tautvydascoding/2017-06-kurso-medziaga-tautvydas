console.log("valio");

$(document).ready(function(){

  password = "121212";
    $("button").click(function(){
        $('p').slideToggle();
    });
    // paspaudus ant straipsnio jis isnyks//
    $('p').click(function(){ //anonimine funkcija//
    $(this).hide(1500);
    });

    // $('p').click(paslepti(this));
    //
    // function paslepti(xx) {
    //   $(xx).hide();
    // }
    $('h1').mouseenter(function(){
      alert('valio!!!!!!!!!!!');
    });



});

(function () {
console.log("iskvieciau save");
})();
