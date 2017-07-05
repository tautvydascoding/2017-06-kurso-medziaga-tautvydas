console.log("labuka");

forma = document.querySelector('form');
forma.addEventListener("submit", tikrintiFormosLaukus) ;

function tikrintiFormosLaukus(event) {
  event.preventDefault(); //uzdraudzia submit veiksma
  vardas = document.querySelector('input[name="firstname"]').value;
  klausimas = document.querySelector('input[name="question"]').value;
  elPastas = document.querySelector('input[name="email"]').value;
  console.log("Vardas " + vardas);
}
