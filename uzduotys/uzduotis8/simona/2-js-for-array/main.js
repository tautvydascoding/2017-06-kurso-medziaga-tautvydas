console.log("labas");

// ------FOR ciklas-------

for (i = 0; i < 25; i++) {
  console.log("tekstas");
}

// --------Array / Masyvai--------
names = ["Tomas", "Petkus", 25, "VDU - inzinerija"];
console.log(names);
console.log(names.join()); //Atspausdina visus Array elementus vienoje eiluteje;
console.log("masyvo ilgis" + names.length);

//surikiuojame
names.sort();
console.log("po rikiavimo" + names.sort()); //po rikiavimo

for (i = 0; i < names.length; i++) {
  console.log(names[i]);
}

names.push("3 vaikai");
console.log("masyvo papildymas:" + names.join()); //
names[20] = "1986-06-03";
console.log("masyvo papildymas:" + names);

testai = [40]; //sukuria vieną stalčiuką: testai [0] = 40;
testai2 = new Array(40); // sukuria 40 atskirų stalčiukų:
console.log("testai [40] : ", testai);
console.log("testai2 [40] : ", testai2);

console.log("Array " + names.toString()); //visus masyvo elementus paverčia į teksto eilutę;
console.log("array " + names.join(" : ")); // išveda visą masyvą vienoje eilutėje, atskiriant elementus/stalčius nurodytu skirtuku " : ".

names.pop(); // ištrina paskutinį masyvo elementą/stalčių
console.log("masyvas po paskutinio elemento ištrynimo : ", names.toString());
names.shift(); // ištrina patį pirmąjį elementą;
names.shift();
console.log("masyvas po paskutinio elemento ištrynimo : ", names.toString());
names.unshift(); //įkeliame naują elementą į masyvo pradžią
console.log("masyvas po paskutinio elemento ištrynimo : ", names.toString());

delete names[0];
console.log("masyvas po pirmo elemento ištrynimo : ", names.toString());

names.splice(1, 0, "braske", "zongliruoti");
console.log("masyvas po splice elemento ištrynimo : ", names.toString());

names.splice(1, 2);
console.log("masyvas po splice - ištrynėm įdėtus : ", names.toString());

names.slice(1); //nesugadina masyvo, bet padaro kopiją
console.log("masyvas po slice 1 :" + names.join("-"));
dalisVardu = names.slice(3);
console.log("masyvas po slice 3 :");
console.log("masyvas po slice 1 :" + names.join("-"));
