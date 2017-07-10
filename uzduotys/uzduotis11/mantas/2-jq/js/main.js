console.log("tadas");

//viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle(1000);
    });
    //paspaudus ant straipsnio jis isnyks
    $("p").click( function() { //anonimine funkcija
    $(this).hide(4000, pranesimas);
    });
//nenaudojant anonimines f-jos
    $("p").click (paslepimas(this));

    function paslepimas(xx) {
      $(xx).hide();
    }
    $("h1").mouseenter(function() {
      alert('uzvedete pele ant h1');
    } );
    var pranesimas = function() {
      alert("tekstas isnyko");
    };

    //////////////////////////////////
});

//js pati save iskviecia//
(function () {
  console.log("iskvieciau save");
}) ();
