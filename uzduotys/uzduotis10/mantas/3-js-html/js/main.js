console.log("labukas");

img = '<img src="http://www.50-best.com/images/friday_memes/its_too_friday.jpg" width="200px" height="100px" alt="friday" />';
title = "<h2>Musu firmos prekes</h2>";
gallery = document.querySelector(".galerija");
gallery.innerHTML = title;
gallery.style.textAlign = "center";
// gallery.style.textAlign = "center";
gallery.appendChild(eilute); //ideda objekta

//i galerija idedam toki bloka
for (var i = 0; i < 2; i++) {
  var eilute = document.createElement("div");

  for (var k = 0; k < 4; i++) {
    eilute.innerHTML += img + " ";
  }
  // gallery.innerHTML = eilute; //deda tik tekstus
  gallery.appendChild(eilute); //ideda objekta
};
