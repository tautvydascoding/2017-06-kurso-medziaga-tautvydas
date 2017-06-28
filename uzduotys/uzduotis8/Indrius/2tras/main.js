console.log("valio");

// forai////////////////
for (i = 0; i < 50; i++){

}


for (i =0; i <5; i++) {
  console.log(i + "Ba");
}

 var cars = ["Sabb" , "VW" , "Volvo" , "BMW"];

 console.log(cars[2]);

 //   Masyvai/Arrey   ///////

 names = ["Tomas", "Tominas", 25,
"VDU-inzinerija"];
console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );

names.sort();
console.log("po rikiavimo: " + names.join());

names.push("3 vaikai");
console.log("masyvas po pap: " + names.join());
names[20] = "1980-08-09";

console.log("masyvas po pap: " + names.join());

testai = [10]; //sukuria viena stalciu testai [0] = 40
testai2 = new Array(40); //sukuria 40 tusciu stalciu/

console.log(testai [40], testai);
console.log("testai2 [40]", testai2);

console.log("array " + names.toString());
console.log("array " + names.join(" : ")); //isveda visa masyva vienoje eiluteje, atskiriant elementus/stalcius nurodytu skirtuku " :  "

names.pop(); //istrina paskutini masyvo elementa/stalciu//
console.log("masyvas po paskutinio el istrynimo" , names.toString());

names.shift(); //istryna pirma el//
console.log("masyvas po pir el istrynimo" , names.toString());

names.splice(1, 0, "sultys", "begti");
console.log("masyvas po splice" + names.toString());

names.splice(1, 2);
console.log("masyvas po splice" + names.toString());

names.slice(1);
console.log("after slice1" + names.join("-"));
