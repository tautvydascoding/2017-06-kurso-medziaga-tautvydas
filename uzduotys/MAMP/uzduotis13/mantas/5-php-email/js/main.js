console.log("labuka");

forma = document.querySelector('form');
forma.addEventListener("submit", tikrintiFormosLaukus) ;

function tikrintiFormosLaukus(event) {
  event.preventDefault(); //uzdraudzia submit veiksma
  vardas = document.querySelector('input[name="firstname"]').value;
  klausimas = document.querySelector('input[name="question"]').value;
  elPastas = document.querySelector('input[name="email"]').value;

    if ( vardas.length > 4 && klausimas.length > 10 && elPastas.length > 5) {
      console.log("Jega");
    } else {
        pranesimas = document.querySelector('.error-message');
        pranesimas.innerHTML += "prasome uzpildyti visus laukus iki galo";
    }
}
