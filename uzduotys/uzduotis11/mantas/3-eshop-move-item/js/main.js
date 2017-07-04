console.log("Karolis labas");

// viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){
  $(".w3-grayscale img").click(function(){
        $(this).animate({
          position: "absolute",
          right: "10px",
          opacity: "0.5",
          height: "10px",
          width: 0
        });
    });



});
