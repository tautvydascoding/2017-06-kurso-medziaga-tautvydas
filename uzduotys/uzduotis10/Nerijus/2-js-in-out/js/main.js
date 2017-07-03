console.log("sveiki111");
// IDEA: retai naudojamas nes isveda po js failu html faile
document.write("<h2>stebuklu salis</h2>");

var gallery = "";
gallery = document.getElementsByClassName("galerija"); // IDEA: suranda visas klases
console.log("galerija:", gallery);
gallery[0].style.backgroundColor = "red";
gallery[1].style.backgroundColor = "#b2b2b2";

// document.getElemetById("reklama");

// IDEA: -------------dazniau raso
aa = document.querySelector("h1"); // IDEA: suranda pati pirma
bb = document.querySelector(".galerija"); // IDEA: suranda pati pirma
zz = document.querySelectorAll(".galerija");
cc = document.querySelector("#reklama");
aa.style.color = "blue";
bb.style.color = "#fff";
// IDEA: bega per visa masyva "gallery" (vis didindamas x reiksme)
// for (x in gallery) {
// gallery[x].style.color = "#" + x + "b" + x + "aaf";
// }

for (var i = 0; i < gallery.length; i++) {
  gallery[i].style.color = "#fab";
}




// IDEA: ----------idedam img --------------
img = '<img src="http://68.media.tumblr.com/33075dea1238585bce5b26296fe695c2/tumblr_inline_o4m75zvcj51tv67o3_400.jpg" width="50px" height="50px" alt="kempiniukas"/>';

// IDEA: gallery.innerHTML
console.log(gallery);
gallery[0].innerHTML += img ;
gallery[0].innerHTML += img ;
gallery[0].innerHTML += img ;
gallery[0].innerHTML += img ;


galerijos = document.querySelectorAll(".galerija");
galerijos[0].style.color = "blue";
tekstas = "<h2>mano atraste</h2>";
galerijos[0].innerHTML += tekstas;
