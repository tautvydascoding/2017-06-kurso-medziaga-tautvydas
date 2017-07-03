document.write("<h2>isvedem teksta!!!!</h2>");
document.write("<h3>isvedem mazesni teksta!!!!</h3>");
document.write("<h4>isvedem dar mazesni teksta!!!!</h4>");
document.write("<h5>isvedem belekaip mazesni teksta!!!!</h5>");
document.write("<h6>isvedem pati maziausai teksta!!!!</h6>");



var gallery = document.getElementsByClassName('galerija');
gallery[0].style.backgroundColor = "red";
gallery[1].style.backgroundColor = "green";
gallery[2].style.backgroundColor = "blue";



console.log("galerija ", gallery);


document.getElementById('menu').style.backgroundColor = "black";
// document.getElementById('menu').style.color = "white";

vienas = document.querySelector('h1');
du = document.querySelectorAll('.galerija');
trys = document.querySelector('#menu');

trys.style.color = "white";




for(var i = 0; i < gallery.length; i++){

    gallery[i].style.color = "#fff";
    gallery[i].style.backgroundColor = "#000";
}

// for (x in gallery) {

//      gallery[x].style.color = "#fff";   
//      gallery[x].style.backgroundColor = "#000";

// }


//-----------------------image-----------------------------------//

img = '<img src="http://www.stasys.igs.lt/wp-content/uploads/2015/04/Drakono-kraujo-medis.jpg" width = "100px" alt ="kazkoks medis"/>';


gallery[2].innerHTML += img;




