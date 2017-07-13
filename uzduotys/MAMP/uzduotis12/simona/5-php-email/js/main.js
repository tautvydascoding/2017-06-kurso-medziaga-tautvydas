console.log("labas");
console.log("Tadas");

forma = document.querySelector('forma');

forma.addEventListener("submit", tikrinsFormosLaukus);

function tikrinsFormosLaukus (event) {
  event.preventDefault(); //sustabdo submit veiksma
  vardas = document.querySelector('input [name="firstname"]').value;
  klausimas = document.querySelector('input [name="question"]').value;
  elPastas = document.querySelector('input [name="email"]').value;
  console.log("vardas" + vardas);
}
if (vardas.lenght > 4 && klausimas.lenght > 10 && elPastas.lenght > 5) {
window.location.href =
"/uzduotis12/simona/5-php-email/email.php";
} else {
  pranesimas = document.querySelector('.error-message');
  pranesimas.innerHTML += "<p>Prasome uzpildyti laukus pilnai</p>";
}
