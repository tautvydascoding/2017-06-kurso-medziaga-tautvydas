//      slider plug-in
$(document).ready(function() {
            /*
             * Plugin intialization 
             */
            $('#pagepiling').pagepiling({
                direction: 'horizontal',
                menu: '#menu',
                anchors: ['page1', 'page2', 'page3', 'page4'],
                sectionsColor: ['cornsilk', '#ee005a', '#2C3E50', '#39C'],
                navigation: {
                    'position': 'right',
                    'tooltips': ['Samoningi', 'Dalintis', 'Dabar', 'Pgae 4']
                },
                afterRender: function() {
                    $('#pp-nav').addClass('custom');
                },
                afterLoad: function(anchorLink, index) {
                    if (index > 1) {
                        $('#pp-nav').removeClass('custom');
                    } else {
                        $('#pp-nav').addClass('custom');
                    }
                }
            });
        });
  
//      quote generator plug in end

        	$(document).ready(function(){
		var quoteSource=[
		{
			quote: "Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible.",
			name:"Vasišta"
	    },
	    {
	    	quote:"Believe you can and you're halfway there.",
	    	name:"Vasišta"
	    },
	    {
	    	quote:"It does not matter how slowly you go as long as you do not stop.",
	    	name:"Vasišta"
	    },
	    {
	    	quote:"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.",
	    	name:"Vasišta A. Edison"
	    },
	    {
	    	quote:"The will to win, the desire to succeed, the urge to reach your full potential... these are the keys that will unlock the door to personal excellence.",
	    	name:"Vasišta"
	    },
	    {
	    	quote:"Don't watch the clock; do what it does. Keep going.",
	    	name:"Vasišta Vasišta"
	    },
	    {
	    	quote:"A creative man is motivated by the desire to achieve, not by the desire to beat others.",
	    	name:"Vasišta Rand"
	    },
	    {
	    	quote:"A creative man is motivated by the desire to achieve, not by the desire to beat others.",
	    	name:"Vasišta Rand"
	    },
	    {
	    	quote:"Expect problems and eat them for breakfast.",
	    	name:"Vasišta A. Montapert"
	    },
	    {
	    	quote:"Start where you are. Use what you have. Do what you can.",
	    	name:"Vasišta Ashe"
	    },
	    {
	    	quote:"Ever tried. Ever failed. No matter. Try Again. Fail again. Fail better.",
	    	name:"Vasišta Beckett"
	    },
	    {
	    	quote:"Be yourself; everyone else is already taken.",
	    	name:"Vasišta Wilde"
	    },
	    {
	    	quote:"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.",
	    	name:"Vasišta Einstein"
	    },
	    {
	    	quote:"Always remember that you are absolutely unique. Just like everyone else.",
	    	name:"Vasišta Mead"
	    },
	    {
	    	quote:"Do not take life too seriously. You will never get out of it alive.",
	    	name:"Vasišta Hubbard"
	    },
	    {
	    	quote:"People who think they know everything are a great annoyance to those of us who do.",
	    	name:"Vasišta Asimov"
	    },
	    {
	    	quote:"Procrastination is the art of keeping up with yesterday.",
	    	name:"Don Marquis"
	    },
	    {
	    	quote:"Get your facts first, then you can distort them as you please.",
	    	name:"Mark Twain"
	    },
	    {
	    	quote:"A day without sunshine is like, you know, night.",
	    	name:"Steve Martin"
	    },
	    {
	    	quote:"My grandmother started walking five miles a day when she was sixty. She's ninety-seven now, and we don't know where the hell she is.",
	    	name:"Vasišta DeGeneres"
	    },
	    {
	    	quote:"Don't sweat the petty things and don't pet the sweaty things.",
	    	name:"Vasišta Carlin"
	    },
	    {
	    	quote:"Always do whatever's next.",
	    	name:"Vasišta Carlin"
	    },
	    {
	    	quote:"Atheism is a non-prophet organization.",
	    	name:"George Carlin"
	    },
	    {
	    	quote:"Hapiness is not something ready made. It comes from your own actions.",
	    	name:"Dalai Lama"
	    }

	];
		

		$('#quoteButton').click(function(evt){
			//define the containers of the info we target
			var quote = $('#quoteContainer p').text();
			var quoteGenius = $('#quoteGenius').text();
			//prevent browser's default action
			evt.preventDefault();
			//getting a new random number to attach to a quote and setting a limit
			var sourceLength = quoteSource.length;
			var randomNumber= Math.floor(Math.random()*sourceLength);
			//set a new quote
			for(i=0;i<=sourceLength;i+=1){
			var newQuoteText = quoteSource[randomNumber].quote;
			var newQuoteGenius = quoteSource[randomNumber].name;
			//console.log(newQuoteText,newQuoteGenius);
      var timeAnimation = 500;
      var quoteContainer = $('#quoteContainer');
      //fade out animation with callback
      quoteContainer.fadeOut(timeAnimation, function(){
        quoteContainer.html('');
				quoteContainer.append('<p>'+newQuoteText+'</p>'+'<p id="quoteGenius">'+'-								'+newQuoteGenius+'</p>');
        
        //fadein animation.
        quoteContainer.fadeIn(timeAnimation);
      });  
			
			break;
		};//end for loop
	
	});//end quoteButton function
		
		
});//end document ready



//    start VALIDA

$(document).ready(function(){
    

    
});

    	// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

//               setup the partial validation

				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});
    
    
//                 end VALIDA

///                 laikasNAV

$(document).ready(function(){
    
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = y + "-" + m + "-" + d;

});
///                 laikasNAV end

$(document).ready(function(){
    (function (window, $) {
  
  $(function() {
    $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
  
})(window, jQuery);
    });



