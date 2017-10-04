console.log("lbutaitis");



forma = document.querySelector('form');

forma.addEventListener("submit",tikrintiFormosLaukus) ;


function tikrintiFormosLaukus (event) {
	event.preventDefault(); // sustabdo "submit" veiksma
	
	vardas = document.querySelector('input[name="firstname"]').value;
	klausimas = document.querySelector('input[name="question"]').value;
	elpastas = document.querySelector('input[name="email"]').value;
	
	if (vardas.lengh > 4 && klausimas.length > 10 && elpastas.legth > 5) {
		window.location.href = "/uzduotis13/....../email.php";
	} else {
	pranesimas = document.querySelector('.error-message');
	pranesimas.innerHTML = "<p>Prasome uzpildyti visus laukus pilnai </p>"
	}
}	
	