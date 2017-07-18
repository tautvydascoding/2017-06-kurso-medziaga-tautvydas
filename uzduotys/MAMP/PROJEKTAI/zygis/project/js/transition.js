$(document).ready(function () {


$(".serv-list").hide();
    var isFirstHidden = true;
    var isSecondHidden = true;
    isHidden = true;
    

    
    $(".service-row-one").click(function(){
        if(isFirstHidden){
        $(this).find(".serv-list").show("slow");
            isFirstHidden = false;
        }else{
           $(this).find(".serv-list").hide("slow"); 
            isFirstHidden = true;
        }
    })
    
    
    
       $(".service-row-two").click(function(){
        if(isSecondHidden){
        $(this).find(".serv-list").show("slow");
            isSecondHidden = false;
        }else{
           $(this).find(".serv-list").hide("slow"); 
            isSecondHidden = true;
        }
    });
    
    
    
    
//---------SHOW/HIDE NAV ACCORDING TO SCREEN SIZE---------//
    
    
    var isMenu = '';
    
    if($(window).width() < 769){
        
    isMenu = false;
    $("nav").hide();
    
        
    } else if($(window).width() > 769){
        
        isMenu = true;
        $("nav").show();
        
    }
    
    
     $(".menu-icon").click(function(){
            if(isMenu){
                
                $(".menu-icon").animate({
                    backgroundColor: "rgba(0,0,0,0.3)",
                    right: "30px",
                    bottom: "10px"
                },300),
                    
                    
                    
                $("nav").hide(300);
                isMenu = false;
            }else{
                
                
                
                $(this).animate({
                    backgroundColor: "rgba(0,0,0,0.8)",
                    right: 0,
                    bottom: 0
                },300),
                    
                    
                    
                    
                    
                $("nav").show(300);
                isMenu = true;
            }
        })
    
   
    });


//-------------------MENU ICON-----------------------//
    

  function iconOpen(x) {
        x.classList.toggle("change");
    }
    
    
     
  