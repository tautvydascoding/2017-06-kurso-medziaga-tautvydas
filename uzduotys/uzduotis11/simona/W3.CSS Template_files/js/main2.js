    $("w3-container img").on("click", function() {
      //this paima konkretu paveiksliuka, ant kurio paspaudus, jis atlieka veiksma
      $(this).FadeOutAnimate({
        position: 'absolute',
        left: '256px',
        top: '200px',
        // height: '-=50px',
        // width: '-=50px'
      });
    });

    // $("#div1").fadeOut();


    $(".w3-row.w3-grayscale img").click(function() {
      //paima konkretu paveiksliuka ant kurio paspaudi //
      $(this).animate({
        position: "absolute",
        left: '250px',
        height: '150px',
        width: '150px'
      })
    });
