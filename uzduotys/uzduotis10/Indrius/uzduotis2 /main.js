console.log("valio");

// retai naudojamas //
document.write (" <h2>Stebuklu salis</2>");

// //spalvos by classe// //
var gallery = document.getElementsByClassName('galerija');
console.log("galerija: ", gallery);
gallery[0].style.backgroundColor = "red";
gallery[1].style.backgroundColor = "blue";
gallery[2].style.backgroundColor = "green";
gallery[3].style.backgroundColor = "red";
gallery[4].style.backgroundColor = "blue";
gallery[5].style.backgroundColor = "green";
document.getElementById('reklama');


// ///////pvz//////////////////
aa = document.querySelector("h1");
bb = document.querySelector(".galerija");
// document.querySelectorAll(".galerija");
cc = document.querySelector("#reklama");
bb.style.color = "white";
zz = document.querySelectorAll(".galerija");



 // //////idedam img  ////////////////


 img = '<img src="http://katierose.co.uk/wp-content/uploads/2013/03/isolated-palm-tree-.jpg" width="50px" height="50px" alt="kempine" />';

zz[0].innerHTML += img;
 zz[1].innerHTML += img;
zz[2].innerHTML += img;
zz[3].innerHTML += img;
 zz[4].innerHTML += img;
zz[5].innerHTML += img;
