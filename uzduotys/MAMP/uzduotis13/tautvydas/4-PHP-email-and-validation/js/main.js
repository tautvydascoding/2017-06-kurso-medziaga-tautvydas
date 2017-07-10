console.log("lbutaitis");



forma = document.querySelector('form');

forma.addEventListener("submit", tikrintiFormosLaukus) ;


function tikrintiFormosLaukus (event) {
    event.preventDefault(); // sustabdo "submit" veiksma

    vardas = document.querySelector('input[name="firstname"]').value;
    klausimas = document.querySelector('input[name="question"]').value;
    elPastas = document.querySelector('input[name="email"]').value;

     if ( vardas.length > 4 && klausimas.length > 10 && elPastas.length > 5) {
          window.location.href = "/uzduotis13/tautvydas/4-PHP-email-and-validation/email.php";
     } else {
       pranesimas = document.querySelector('.error-message');
       pranesimas.innerHTML += "<p>Prasome uzpildyti visus laukus pilnai</p>";
     }
}







//
