//viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){

    $(".services").click( function() {
    $(".secret").show(100);
    $(".about-bar").hide();
    $(".services-bar").fadeIn(500);
    $(".padding").hide();
    });

    $(".about").click( function() {
    $(".secret").show(100);
    $(".services-bar").hide();
    $(".about-bar").fadeIn(500);
    $(".padding").hide();
    });

    $(".secret").click( function() {
        $(".secret").fadeOut(function() {
          $(".padding").fadeIn(500);
        });
        });
});
