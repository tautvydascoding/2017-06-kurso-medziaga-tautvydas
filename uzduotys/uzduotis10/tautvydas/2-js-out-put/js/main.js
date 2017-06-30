console.log("tadas232332");

// retai naudojamas nes iveda po js failu
document.write(" <h2>Stebuklu salis</h2> ");


var gallery = "";
gallery = document.getElementsByClassName("galerija"); // suranda VISAS  galerija kalses
console.log("galerija: ", gallery);
gallery[0].style.backgroundColor = "red";
gallery[1].style.backgroundColor = "#f2f2f2";

document.getElementById('reklama');


//---------dazniau raso
aa = document.querySelector("h1");       // suranda pati pirma
bb = document.querySelector(".galerija"); // suranda pati pirma
zz = document.querySelectorAll(".galerija");// SURANDA VISUS
mm = document.querySelectorAll("div.note, div.alert");
cc = document.querySelector("#reklama"); // suranda pati pirma

console.log("zz" , zz);

aa.style.color = "blue"; // pakeiciam h1 teksto spalva
bb.style.color = "#fff";

// uzduotis:
// naudojant js ciklus (while / for) pakeisti, visu galeriju slapva i balta

// bega per visa masyva "gallery" ( vis didindamas x reiksme)
// for (   x in gallery) {
//   // #xBxaaf
//   var c = "#f2f2f2";
//   gallery[x].style.color = "blue";
// }

for (var i = 0; i < gallery.length; i++) {
   gallery[i].style.color = "#fab";
}
// i = 0;
// while (i < gallery.length) {
//   gallery[i].style.color = "#fab";
//   i++;
// }
//

// ----------------------idedam img------ -- - - - -
img = '<img src="http://68.media.tumblr.com/33075dea1238585bce5b26296fe695c2/tumblr_inline_o4m75zvcj51tv67o3_400.jpg" width="50px" height="50px" alt="kempiniokas mano foto" />';


// gallery.innerHTML //
zz[0].innerHTML += img ;
zz[0].innerHTML += img ;
zz[0].innerHTML += img ;
zz[0].innerHTML += img ;

// ===================js out put===================
pirmojiGalerija = document.querySelector('.galerija'); // SURANDA pirma
galerijos = document.querySelectorAll(".galerija");  // SURANDA VISUS
galerijos[0].style.color = "blue"; // pakeiciam  teksto spalva
  tekstas = "<h2> Mano antraste </h2>";
galerijos[0].innerHTML += tekstas ;

gime = prompt("Ivesk savo gimimo data");
console.log("Jusus gimimo data: ", gime);






//
