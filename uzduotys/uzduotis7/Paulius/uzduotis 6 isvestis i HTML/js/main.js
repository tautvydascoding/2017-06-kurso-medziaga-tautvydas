///// retai naudojamas nes isveda po failu..
document.write("<h2>Stebuklu salis</h2>");




var x = document.getElementById('penki');
x.style.backgroundColor = "blue";

///// visgi dazniausiai naudojama:

//var kita = document.querySelectorAll("kita");
//kita.style.backgroundColor = "blue";

///// inner html - papildo hazkuri is HTML elementų
var gallery = document.getElementsByClassName("galerija");
console.log(gallery);

for (i = 0; i < gallery.length; i++) {
    gallery[i].style.backgroundColor = "gray";
};

//for ( x in gallery ){                       ////ieskom su IN metodu - paprasciau
//    gallery[x].style.color = "red";
//};

////////////////////-----------add image//


img = '<img src="https://upload.wikimedia.org/wikipedia/en/a/a2/The_Mummy_%282017%29.jpg" height="150px" width="150px" alt="texxx"/>'
gallery[1].innerHTML = img;//*//nes masysvas ///
gallery[2].innerHTML += img;
gallery[0].innerHTML += img;