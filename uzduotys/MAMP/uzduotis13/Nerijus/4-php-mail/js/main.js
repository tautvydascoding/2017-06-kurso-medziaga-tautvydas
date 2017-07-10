console.log("labas");

forma = document.querySelector('form');

forma.addEventListener("submit", tikrintiFormosLaukus);

function tikrintiFormosLaukus(event) {
  event.preventDefault();  // IDEA: sustabdo submit veiksma
  vardas = document.querySelector('input[name="firstname"]').value;
  klausimas = document.querySelector('input[name="question"]').value;
  elPastas = document.querySelector('input[name="email"]').value;
  console.log("vardas: " + vardas);
} if (vardas.lenght > 4 && klausimas.lenght > 10 && elPastas.lenght > 5) {
  window.location.href = "uzduotys/MAMP/uzduotis13/Nerijus/4-php-mail/email.php"
  event.preventDefault();
  console.log("klausimas yra: " + klausimas);
} else {
  pranesimas = document.querySelector('.error-message');
  pranesimas.innerHTML = "prasome uzpildyti visus laukus";
}
