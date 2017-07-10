console.log("Sandra");

//viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function() {

  $('button').click(function() {
    // $('p').fadeToggle(1000);
    $('p').slideToggle(1000);
  });

//paspaudus ant straipsnio, jis pasisleps
$('p').click(function() { //anonimine f-ija
  $(this).hide(4000, pranesimas);
});
//nenaudojant anonimines f-ijos
$('p').click(paslepimas(this));
function paslepimas(xx) {
  $(xx).hide(); //paslepe visus p
}

// $('h3').mouseenter(function() {
//   alert('uzvedete pele ant h3');
// });

// });

//pati save issikviecianti funkcija
(function() {
  console.log("iskvieciau save");
})();

// //lentele alert su tekstu
// function pranesimas(text) {
//   alert("tekstas isnyko");
}
// //ARBA
// var pranesimas2 = function (){
//   alert("tekstas isnyko");
};
