///////// ARRAY

names = ['tomas', 'pietkus', '25', 'vdu-inzinerija'];
console.log(names.join()); /// sujungia vardus

////
names.sort();
console.log(names.join()); //////surikiuoja elementus
/////  
    
                                         ///// for naudojamas atvaizduojamas masyva
for (i = 0; i < names.length; i++){     ///i naudojama kiek kartu begti per masyva
    console.log( names[i] );             ////names[i] - net negalvojant galima deti i vidu
}



names.push("3 vaikai");         ///idedame kintamaji '3 vaikai'
console.log("masyvas po papildymo: " + names.join()); //atvaizduojam
names[20] = "1986-05-04"; //dedam reiksme i 20 vietą.
console.log("masyvas po papildymo: " + names); //atvaizduojam
/////

testai = [40]; ///sukuria testai [0] - 40
testai2 = new Array(40); //// sukuria 40 tusciu stalciu
console.log("testai [40] : ", testai); //atvaizduojam
console.log("testai [40] : ", testai2); //atvaizduojam

console.log("array " + names.toString()); //// masyva pavercia i eilute
console.log("array " + names.join(" : ")); //atskiria skirikliu

names.pop(); ///istrina paskutini masyvo elementa
console.log("masyvas po paskutinio elemento istrynimo: ", names.toString());

names.shift()
console.log("masyvas po pirmojo elemento istrynimo: ", names.toString());

delete names[1]; /// palieka stalciuka, bet elementa istrina. (nelabai naudojamas)
console.log("masyvas po pirmojo elemento istrynimo: ", names.toString());

names.splice(1, 0, "Lemon", "Kiwi"); ///skirtas įterpti. 1 - nuo kur, 0 ką ištrinti "lemon ir kiwi" - reikšmės ką įterpiame.
console.log("masyvas po pirmojo elemento istrynimo: ", names.toString());

names.slice(1);
console.log("masyvas po slice 1: " + names.join( "-" ));
dalisVardu = names.slice(3);
console.log("masyvas po slice 3: " + dalisVardu.join( "-" ));


