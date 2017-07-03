console.log("huehuehuehuehue");

//-----------------------image-----------------------------------//

img = '<img src="http://www.stasys.igs.lt/wp-content/uploads/2015/04/Drakono-kraujo-medis.jpg" width = "250px" alt ="kazkoks medis"/>';




//1) i galerija ideti h2 elementa "Musu firmos prekes"
//2)wile/for ispausdinti pora eiluciu nuotrauku(vienoj eilutej 4 nuotraukos)


title = "<h2>Musu firmos prekes</h2>";
gallery = document.querySelector(".galerija");

gallery.innerHTML = title;


gallery.style.textAlign = 'center';


eilute = document.createElement("div")

//innerHTML sugeba idet tik teksta todel kitiem dalykam nenaudjam (pvz objektam)


for (var i = 0; i < 3; i++){

        for(j = 0; j < 4; j++){
        eilute.innerHTML += img + " ";

     }
    eilute.innerHTML += "<br/>";


}


gallery.append(eilute); // i galerija idedam diva ir ji uzdaro, bet sitas ideda ir objektus, ka siuo atveju ir padarem





