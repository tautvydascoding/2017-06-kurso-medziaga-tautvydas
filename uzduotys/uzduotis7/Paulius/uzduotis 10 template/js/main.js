$(document).ready(function () {

    $("h1").css("background-color", "red");

    $(this).css({
    position: "absolute",    
    });
    
    $(".w3-row img").click (function() {
        $(this).animate({
            right: "20px",
            top: "20px"
            

        });
    });
});









//$(document).ready(function (){ ///// viduje esantis kodas veiks tik puslapiui pasileidus pilnai
//
//
//
//    $("img").click(function() {
//        $(this).fade(100);
//    })
//
//
//});
//
//
//
////$("button").click(function(){
////    $("#div1").fadeIn();
////    $("#div2").fadeIn("slow");
////    $("#div3").fadeIn(3000); ".w3-grayscale img"
////});-
