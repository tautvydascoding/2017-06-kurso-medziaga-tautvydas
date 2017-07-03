//sukuriame objekta

zmogus = {
    vardas:'juste',
    amzius:'13',
    as:454585545125
};

for(x in zmogus ) {  ///for ciklas kuris skirtas begti per objektu ciklu informacija.
    console.log('reiksme:', zmogus[x]);
}

vardai = ['kaupis', 'kiauliuux', 'agrastux', 'tartis'];

for (y in vardai) { ////for ciklas skirtas begti per MASYVUS
    console.log("masyvo reiksme: ", + vardai[y])
    if (vardai[y] == 'agrastux') {       ///cia galima deti break arba if - jei norim tarkim tik 50.
console.log("radau agrastuxa");
    }
    
  
}  

for (y in vardai) { 
    console.log("masyvo reiksme: ", + vardai[y])
    ///cia galima deti break arba if - jei norim tarkim tik 50.
}  


//--------------------------------------------------------------//

Uzduotis: 
// A) susikurti funkcija, kuri spausdina i konsole paduota  skaiciu (lengvesne uzduotis: betkoki skaiciu)
// B) Paleisti funkcija 20 kartu
// C) susikurti funkcija, kuri spausdina paduota skaiciiu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")



function spausdintiSkaicius(x) {
console.log("spausdinu: ", x);
};

spausdintiSkaicius(200, 20); //// 20 neatspaus nes reikia kazko tiketis prie (x).

for (i=0; i < 20; i++) {
    spausdintiSkaicius(222) ////kiek reiksmiu jinai tikisi? Vienos.
}

t = 0;      /////pabandykime ta pati su WHILE
while (t < 20) {
    spausdintiSkaicius(222);
    t++; ////butinai kad didedu nes kitu atveju strigsim.
}

////------------C) susikurti funkcija, kuri spausdina paduota skaiciiu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")------////

function print (x = "nepadavei reiksmes!!") { ///// = cia bus default
    console.log(x);
}
print("reiksme paduota");

////-

function print2 ( x ) {
    if (x === undefined) {
        console.log("nepadavei reiksmes!!!!");
    } else if (isNaN (x)){
        console.log("NE tai NE skaicius!!!");
    }
}
print2();

///------------------------------///

console.log("--------------IESKAU RIKO, jeigu nerandu pranesu--------")












