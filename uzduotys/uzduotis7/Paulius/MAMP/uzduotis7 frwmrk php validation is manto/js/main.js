console.log("Hey you");
///////validuojame reiksmes kurios buvo ivestos


forma = document.querySelector("form"); ////pasirenkame forma - ja tikrinsime.
forma.addEventListener("submit", tikrintiFormosLaukus) ; //add event listener iskviecia funkcija.

function tikrintiFormosLaukus(Event){
    x.preventDefault(); ////sustabdo submit veiksma. Ji padareme auksciau.
    
    vardas = document.querySelector("input['name=firstname']").value;
    
    if(vardas.length > 3 && klausimas.length > 10 && elPastas.length > 5) {
        console.log("Hey you");
    } else {console.log("beat it");}
    
    klausimas = document.querySelector("input['name=question']").value;
    if (klausimas < 1) {
    console.log("Hey you");
}
    elPastas = document.querySelector("input['name=email']").value;
    
    console.log("vardas" + vardas);
}




