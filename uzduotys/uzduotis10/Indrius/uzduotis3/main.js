console.log("valio");

img = '<img src="http://katierose.co.uk/wp-content/uploads/2013/03/isolated-palm-tree-.jpg leght"50px" width"50px"';

title = "<h2>Musu firmos prekes</h2>";

var gallery = document.getElementsByClassName('galerija');
console.log("galerija: ", gallery);
gallery[0].style.backgroundColor = "green";
gallery[1].style.backgroundColor = "blue";
gallery[2].style.backgroundColor = "green";
gallery[3].style.backgroundColor = "blue";

zz = document.querySelectorAll(".galerija");

 img = '<img src="http://katierose.co.uk/wp-content/uploads/2013/03/isolated-palm-tree-.jpg" width="50px" height="50px" alt="kempine" />';



zz[0].innerHTML += img +title;

 zz[1].innerHTML += img +title;
zz[2].innerHTML += img + title;
zz[3].innerHTML += img + title;
