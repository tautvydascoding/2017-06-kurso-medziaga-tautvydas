console.log("labas");

testai = [40]; // IDEA: sukuria viena stalciu
testai2 = new Array(40); // IDEA: sukuria 40 tusciu stalciu
console.log("testai [40] : ", testai);
console.log("testai2 [40] : ", testai2);

console.log("array " + names.toString() ); // IDEA: masyvo elementus pavercia i teksto eilute
console.log("array " + names.join(" : ") ); // IDEA: isveda visa masyva vienoje eiluteje, atskiriant elementus/stalcius nurodytu skirtuku

names.pop(); // IDEA: pop komanda istrina paskuti masyvo elementa/stalciu
console.log("masyvas po paskutinio elemento istrinimo:", names.toString());
names.shift();
console.log("masyvas po pirmo elemento istrinimo:", names.toString());

names.splice(1,0, "garstycios", "zogliruoti");
