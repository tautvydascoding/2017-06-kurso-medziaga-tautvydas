img = '<img src="https://upload.wikimedia.org/wikipedia/en/a/a2/The_Mummy_%282017%29.jpg" height="150px" width="150px" alt="texxx"/>'

title = "<h2>Mes teikiame sias paslaugas</h2>";
gallery = document.querySelector(".galerija");

gallery.innerHTML = title;
gallery.style.textAlign = 'center';


eilute = document.createElement("div"); /// i galerija idedame DIV

for (i = 0; i < 4; i++) {
    eilute.innerHTML += img + " ";



}


////arba ciklas cikle




for (var i = 0; i < 500; i++) {
    eilute = document.createElement("div"); /// i galerija idedame DIV
    for (var k = 0; k < 4; k++) {
        eilute.innerHTML += img + " ";

    }
    gallery.appendChild(eilute); //// ideda OBJEKT!

};


