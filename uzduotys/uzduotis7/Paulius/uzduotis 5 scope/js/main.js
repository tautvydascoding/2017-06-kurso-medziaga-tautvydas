n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = y + " - " + m + " - " + d;










//function spausdinti(x) {
//    return x * 845 + 55;
//
//}
//
//
//i = 0;
//while (i < 14) {
//    console.log("atvaizduojam su while ", spausdinti(70000));
//    i++;
//}
//
//for (i = 0; i < 25; i++) {
//    console.log("atvaizduojam su for ", spausdinti(8));
//}
//
//
//
///////////////------------scope-------//////////////
//
//
//vardas = "globalus" /// tai globalus kintamasis, bendrabucio virtuve
//console.log("pavadinimas: ", vardas); //////atvaizduojamas
//
//function test() {
//    console.log("vardas funkcijoje: " + vardas);
//    var pavarde = "Rimiskis"; ///// tai local kintamasis
//    console.log("pavarde funkcijoje: " + pavarde);
//    vardas = "Tomas";
//
//    console.log("vardas funkcijoje po priskyrimo: " + vardas);
//    var vardas = "Local";
//    console.log("vardas funkcijoje po antrojo priskyrimo: " + this.vardas); //// .this iskelia komanda uz skliausteliu {}
//}
//
//console.log()
//test();
//
/////////////////----------------lendam gylyn------------------------////////
//
//
//graikija = {
//    sala: "Korfu - pasiek mane",
//    name: "tetis",
//    sala4: function () {
//        
//       sala = this.sala;
//        console.log("sala 1 Gylis:", this.sala); ////this pasieks tecius
//         
//            issaukiame: function printskrynia() {
//                sala = this.sala;
//                console.log("sala 2 Gylis: ", sala);
//            }
//            printskrynia();
//
//        }
//
//    };
//
//
//graikija.sala4();
//
//
/////Įsivaizduok, rašiau reikšmę kad Graikijos = Korfu. Bet man atvaizduoja Graikija = Paulius, įsivaizduoji?? O net nėra tokios reikšmės kaip "Paulius" niekur išvis...
