console.log("labas");

//retai naudojamas, nes iveda po js failu
document.write(" <h2> Stebuklu salis </h2>");

var gallery = "";
gallery =   document.getElementsByClassName('galerija'); //suranda visas galerijos klases
console.log("galerija:", gallery);  //surado visus div'us su galerija
gallery[0].style.backgroundColor = "red";  //[0] reiskia, kad norim paimti pati pirma stalciuka galerijos
gallery[1].style.backgroundColor = "#f2f2f2";

document.getElementById('reklama');


//dazniau rasoma javascripte, kaip paselectina
aa = gallery = document.querySelector("h1"); //suranda patį pirmą
bb = gallery = document.querySelector(".galerija");
cc = gallery = document.querySelector("#reklama");
aa.style.color = "blue";  //keiciama h1 spalva
bb.style.color = "#fff";

// for (x = gallery) {
//   //#fff;
//   gallery[x].style.color = "blue";
// }
// //Uzduotis: naudojant js cikla (for/while) pakeisti visu galeriju spalva i geltona
//
// for (var i = 0; i < gallery.length; i++) {
//   gallery[i].style.color = "#fab";
// }
//
// i = 0;
// while (i < gallery.length) {
// gallery[i].style.color = "#fab";
//   i++;
// }

// ------idedam img----------
img = '<img src="http://68.media.tumblr.com/33075dea1238585bce5b26296fe695c2/tumblr_inline_o4m75zvcj51tv67o3_400.jpg" width="100px" height="100px" alt="kempe"/>';

// gallery.innerHTML //
console.log(gallery[1]);
bb[0].innerHTML += "++++++++++";
bb[0].innerHTML += "++++++++++";

//
pirmojiGalerija = document.querySelector("galerija"); // suranda pirma
galerijos = document.querySelectorAll (".galerija"); //suranda visus
galerijos[0].style.color = "blue"; //pakeiciam teksto spalva
tekstas= "<h2> Mano antraste </h2>";
galerijos[0].inner.HTML += tekstas;

a = prompt ("Ivesk savo gimimo data");
console.log ("Jusu gimimo data:", gime);
