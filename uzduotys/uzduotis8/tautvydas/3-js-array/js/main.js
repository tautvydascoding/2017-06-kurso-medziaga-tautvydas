console.log("labas");
// ----------puslapio nustaytmai---------

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "krokodilas" ];

// uzduotis
// 1. i masyvo gala ideti elmenta “butelis vandens”
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
// 3. istrinti 3 elmenta
// -- SPRENDIMO VARIANTAI---
masinosBagazine.push("butelis vandens");
masinosBagazine[ masinosBagazine.length ] = "butelis vandens";
masinosBagazine[ 5 ] = "butelis vandens";   // taip Nedaryti!
masinosBagazine.splice(masinosBagazine.length, 0, "butelis vandens");

masinosBagazine.unshift("ziebtuvelis");
masinosBagazine.splice(0, 0, "ziebtuvelis");

delete masinosBagazine[3]; // nelabai naudoti, nes skalvisu liks, o ti kturini istrins
masinosBagazine.splice(2,1);


// 4. sukurti masyva (50 ilgumo) ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
// 5.  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;




 //
