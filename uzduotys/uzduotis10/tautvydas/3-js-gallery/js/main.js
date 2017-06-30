console.log("tadas1");

 img = '<img src="http://68.media.tumblr.com/33075dea1238585bce5b26296fe695c2/tumblr_inline_o4m75zvcj51tv67o3_400.jpg" width="50px" height="50px" alt="kempiniokas mano foto" />';


// 1) i .galerija ideti h2 elementa "Musu firmos prekes"
// 2) while/for ispasudinti pora eiluciu nuotrauku ( vienoje eiluteje 4 nuotraukos)

title = "<h2>Musu firmos prekes</h2>"; // String
gallery = document.querySelector(".galerija"); // obj

gallery.innerHTML = title;
gallery.style.textAlign = "center";


eilute = document.createElement("div"); // sukuria obj <div> </div>
for (var i = 0; i < 4; i++) {
  eilute.innerHTML += img + "   ";
}
// innerHTML NEPAVYKS
// gallery.innerHTML = eilute; // sugeba ideti tik tekta
// i galerija idedame <div> </div>
gallery.appendChild(eilute); // ideda obj i galerija




// ciklas cikle
for (var i = 0; i < 6; i++) {
  var eilute = document.createElement("div"); // sukuria obj <div> </div>
  for (var k = 0; k < 4; k++) {
    eilute.innerHTML += img + "   ";
  }
  gallery.appendChild(eilute); // ideda obj i galerija
}
