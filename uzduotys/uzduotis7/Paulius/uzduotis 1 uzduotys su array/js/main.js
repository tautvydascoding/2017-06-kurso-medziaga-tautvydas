masinosBagazine = ['daiktas1', 'daiktas22', 'daiktas33', 'daiktas44', 'daiktas555']
console.log(masinosBagazine.toString());

masinosBagazine.push('daiktas-i-gala'); /// dedu i pabaiga
console.log(masinosBagazine.toString);

masinosBagazine.unshift("daiktas-i-pradzia"); //// dedu i pradzia
console.log(masinosBagazine.toString());

masinosBagazine.splice(3, 1);
console.log(masinosBagazine.toString()); /// tostring isveda i eilute


///// done




///// tai va, darom kartu :DDD sukurti masyva 50 ilgumo uzpildyti skaiciumi 1

sarasas = []    ////kuriam masyva
for (var i = 0; i < 50; i++){
    sarasas[i] = 0;
}
console.log('for sarasas: ', sarasas.join(" ... ")); ///join sujungia ...

///// kaip tai padaryti su while???

sarasas2 = [] 
i = 0;
while (i < 50){
    sarasas2[i] = 1;
    i++;
}
console.log('for sarasas2: ', sarasas.join(" *** "));


////su fill - palei Andriu

sarasas = new Array (50);
sarasas.fill(0)
console.log('for sarasas: ', sarasas.join("    "));


////ND Kas antra masyvo elementa pakeisti i trejetą. 

var fruits = ["Banana", "Orange", "Apple", "Mango"];
for (i=0; i < 50; i=i+2) {
    fruits[i] = 3;
}
console.log('Keiciame reiksmes: ', fruits);













