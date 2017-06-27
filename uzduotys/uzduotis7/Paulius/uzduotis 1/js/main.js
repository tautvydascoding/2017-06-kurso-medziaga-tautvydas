

name = "Paulius";
pavarde = "Pastauka";
klase = 9;

console.log("Mane vadina " + name);
console.log("Mane dar vadina " + pavarde);
console.log("Mano klase yra " + klase);

console.log("uzduotis1" , name, pavarde, klase );

//sulipdome i viena kintamaji "tekstas"
tekstas = name + " " + " " + pavarde + " " + " " + klase;
console.log("uzduotis2" , tekstas );

/////////////f-jia reikia issaukti su "spausdinti ()"

function spausdinti() {
    vidurkis = 6;
    praleistosPamokos = 55;
    rukomajamePraleista = "daaaug:D, reikia daugiau valgyt";
    text = "vidurkis: " + vidurkis + " praleido " + praleistosPamokos + " " + rukomajamePraleista;
    console.log(text)
}

////spausdinti(); - uzkomentavau spausdinima

///////////////f-ijos pvz END

///f-jia kuri atspausdina duotas reiksmes. spausdinti vidurki 

function print() {
    vidurkis = 6;
    praleistosPamokos = 55;
    rukomajamePraleista = "daaaug, reikia daugiau valgyt";
    
    console.log("Jo Vidurkis: " + vidurkis, "Praleido pamoku: " + praleistosPamokos, "ir jo pomegiai: " + rukomajamePraleista)
}

print();

function daugyba() {
    vienas = 5;
    du = 5;
    trys = 50454;
    console.log("SKAICIUS", vienas + du * vienas * du * trys )
}

daugyba();
