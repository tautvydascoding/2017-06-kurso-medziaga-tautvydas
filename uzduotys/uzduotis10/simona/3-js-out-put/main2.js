console.log("Laura");

// ------idedam img----------
img = '<img src="http://68.media.tumblr.com/33075dea1238585bce5b26296fe695c2/tumblr_inline_o4m75zvcj51tv67o3_400.jpg" width="100px" height="100px" alt="kempe"/>';

// // gallery.innerHTML //
// console.log(gallery[1]);
// bb[0].innerHTML += "++++++++++";
// bb[0].innerHTML += "++++++++++";

//1) i .galerija ideti h2 elementa "Musu firmos prekes"
//2) while/for isspausdinti pora eiluciu nuotrauku  (vienoje eiluteje 4 nuotraukos)

title = "<h2>Musu firmos prekes</h2>"; //string
gallery = document.querySelector(".galerija"); //objektas
gallery.innerHTML = title;
gallery.style.textAlign = "center"; //centruoti bus ne H2 elementai, bet visas tekstas bus centruotas is galerijos.


eilute = document.createElement("div");
for (var i = 0; i < 4; i++) {
  eilute.innerHTML += img + " ";
}
// gallery.innerHTML = eilute;    <-- nepavyks
//i galerija idedame <div> >/div>
gallery.appendChild(eilute);
eilute = document.createElement("div");
for (var i = 0; i < 4; i++) {
  eilute.innerHTML += img + " ";
}

//ciklas cikle
for (var i = 0; i < 2; i++) {
  var eilute = document.createElement("div");
  for (var k = 0; k < 4; k++) {
    eilute.innerHTML += img + " ";
  }
  gallery.appendChild(eilute);
}
