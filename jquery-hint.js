    // viduje esantis kodas veiks tik uzsikrovus visam puslapiui
$(document).ready(function(){

}
	


 //===============selects===========
$("p, .test, .demo");


 
	 //===============effects===========
	$("button").click(function(){
        $('p').fadeToggle( 1000);  
    });
	
	
	  // paspaudus ant straipsnio jis pasisleps
    $('p').click( function(){  // anonimine f-ja
        $(this).hide(4000, pranesimas);
    });
	
	
	
    $("button").click(function(){
        $(".mybox").animate({
        	position: 'absolute',
            left: '250px',
            opacity: '0.5',
            height: '+=150px',   // kiek nuo daabrtinio dydzio dar padidinti
            width: '150px'		// iki kokio dydzio didinti
        });
    });
	
    $( "<div>" )
			.append( "<h1>xxxxx</h1>" )
			.appendTo( "#log" );
			
	// ===================css==================
	 $("p").css("background-color", "yellow");
			
	 $("p").css( 
        {
        "background-color": "yellow",
        "font-size": "200%",
        "color" : "#000",
        "border" : "solid 2px red"
        } 
    );
			
			
	    manoStilius = {
        	"color": "red",
            "background-color" : "#b2b2b2",
            "font-size" : "14px" 
        }
        
        $("p").css( manoStilius);
		
		//=========width===========
		width()
		height()
		innerWidth()
		innerHeight()
		outerWidth()
		outerHeight()
		$("#div1").width();// paimti ploti
		$("#div1").width(500).height(500); // pakeisti
			
	//===============redirect==========
        // similar behavior as an HTTP redirect // apsaugo   vartotoja nuo Back neverendding loop
        window.location.replace("http://google.com");	
		
		// similar behavior as clicking on a link
		window.location.href = "http://stackoverflow.com";
		
	// ==============GET=======
	text() - Sets or returns the text content of selected elements
html() - ispasusdins kaip teksta (elementus)
val() - Sets or returns the value of form fields
$("#w3s").attr("href"); // paima atributa 
	// ============SET===========
html("<h1>aaaa</h1>");
text("<h1>aaaa</h1>")
val("<h1>aaaa</h1>")
  $("#w3s").attr("href", "https://www.w3schools.com/jquery");
  
  
  append() - Inserts content at the end of the selected elements
prepend() - Inserts content at the beginning of the selected elements
after() - Inserts content after the selected elements
before() - Inserts content before the selected elements
$("p").append("Some appended text.");
$("#div1").remove();
$("#div1").empty();
$("p").remove(".test");  //  The following example removes all <p> elements with class="test":  
  $("p").remove(".test, .demo");
  
  
  
  
  
  
  
  
  
  
  //