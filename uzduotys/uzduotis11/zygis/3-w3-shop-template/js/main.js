$(document).ready(function(){
    $('.l3 img').click(function(){

        // var imageCopy = $(this).cloneNode(true);

        // var imgParent = this.parentNode;


        // imgParent.insertBefore(imageCopy, this);
        

        $(this).css("position", "absolute");
        $(this).css("max-width", "200px");


        $(this).animate({

            
            right: '10px',
            top: '10px',
            width: '20px',  
            opacity: '0'
            


        }, 1500);


    })
})