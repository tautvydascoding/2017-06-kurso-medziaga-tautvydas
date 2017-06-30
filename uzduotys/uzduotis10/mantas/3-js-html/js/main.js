console.log("labukas");

//retai naudojamas, nes isveda po js failu
document.write(" <h2>Stebuklu salis</h2>");
//
var gallery = document.getElementsByClassName("galerija"); //suranda visas klases
console.log("galerija: ", gallery);
gallery[0].style.backgroundColor = "red";
gallery[1].style.backgroundColor = "#b2b2";
// sunkesnis aprasymas

//lengvesnis//
// document.GetElementById("reklama");
//

//dazniau naudojamas
aa = document.querySelector("h1"); //suranda pati pirma
bb = document.querySelector(".galerija");
//document.querySelectorAll
cc = document.querySelector("#reklama");

bb.style.color = "green";
cc.style.color = "blue";


for (var i = 0; i < gallery.length; i++) {
  gallery[i].style.backgroundColor = "yellow";
}
//--------------------------idedam img-----------//
img = '<img src="http://www.50-best.com/images/friday_memes/its_too_friday.jpg" width="300px" height="200px" alt="friday" />';
gallery[1].innerHTML += img;
gallery[1].innerHTML += img;gallery[1].innerHTML += img;gallery[1].innerHTML += img;
