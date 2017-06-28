// IDEA: while ciklas 50 kartu atspauzdinti zodi "azuolas"
i = 0;
while (i < 50) {
  console.log("azuolas"); // IDEA: console.log("azuolas"); isveda viena zodi su suma
  i = i +1;
}
i = 0;
while (i < 50) {
  console.log("azuolas" + i); // IDEA: console.log("azuolas" + i); isveda ta pacia eilute dauuk kartu
  i = i +1;
}
// IDEA: funkcijas kuri atspauzdina (x) reiksme ir atspauzdinti 150 kartu funkcija (padudant i reiksme)
function print(reiksme) {  // IDEA: reiksme laikinas kintamasis, kuris gauna kvietimo metu suteikiama reiksme
console.log("reiksme" + i);
}
i = 0;
while (i < 150) {
  print(i); // IDEA:  kvieciama funkcija
 i = i +1; // IDEA: didina i reksme kad pasiektu 150
}
// IDEA: isveda teksta eiluteje
i = 0;
text = " ";
while (i < 10) {
text += "labas" + i; // IDEA: text = text + "labas" + i
i = i +1; 
}
console.log(text);
