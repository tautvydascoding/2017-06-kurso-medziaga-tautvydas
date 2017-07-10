console.log("Hey you");
///////validuojame reiksmes kurios buvo ivestos


forma = document.querySelector("form"); ////pasirenkame forma - ja tikrinsime.
forma.addEventListener("submit", tikrintiFormosLaukus) ; //add event listener iskviecia funkcija.

function tikrintiFormosLaukus(Event){
    x.preventDefault(); ////sustabdo submit veiksma. Ji padareme auksciau.
    
    vardas = document.querySelector("input['name=firstname']").value;
    if(vardas.length < 3){
        alert("koks cia vardas??")
    }
    klausimas = document.querySelector("input['name=question']").value;
    elPastas = document.querySelector("input['name=email']").value;
    
    console.log("vardas" + vardas);
}




