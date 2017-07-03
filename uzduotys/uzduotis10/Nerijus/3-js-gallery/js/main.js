console.log("sveiki111");

// IDEA: ----------idedam img --------------
img = '<img src="http://68.media.tumblr.com/33075dea1238585bce5b26296fe695c2/tumblr_inline_o4m75zvcj51tv67o3_400.jpg" width="50px" height="50px" alt="kempiniukas"/>';

title = "<h2>Musu firmos prekes</h2>";
gallery = document.querySelector(".galerija");

gallery.innerHTML = title;
gallery.style.textAlign = "center";
// IDEA: i galerija idedame div bloka
eilute = document.createElement("div");
for (var i = 0; i < 4; i++) {
  eilute.innerHTML += img + " ";
}

gallery.appendChild(eilute);

eilute = document.createElement("div");
for (var i = 0; i < 4; i++) {
  eilute.innerHTML += img + " ";
}
gallery.appendChild(eilute);

for (var i = 0; i < 6; i++) {
var eilute document.createElement("div");
for (var k = 0; i < 4; i++) {

}
}
