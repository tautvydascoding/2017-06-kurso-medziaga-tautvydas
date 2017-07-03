console.log("verslas nuo nulio");

// IDEA: viduje esantis kodas veiks tik uzsikrovus puslapiui
$(document).ready(function(){

  password = "sssasqd";
    $("button").click(function(){
        $('p').slideToggle(1000);
    });
    $('p').click(function(){
      $(this).hide(4000, pranesimas);
    });
    // $('p').click(paslepimas(this));
    //   function paslepimas(xx) {
    //     $(xx).hide();
    //   }

      $('h1').mouseenter(function() {
        alert('uzvedete pele ant h1');
      });
function pranesimas(text) {
  alert("tekstas isnyko");
}
});

(function() {
console.log("iskvieciau save");
})();
