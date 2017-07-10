console.log("huehuehuehue");


forma = document.querySelector('form'); //arba document.querySelector("form");

forma.addEventListener("submit", tikrintiFormosLaukus);


function tikrintiFormosLaukus(event) {
    event.preventDefault(); //uzdraudzia/sustabdo "submit" veiksma
    vardas = document.querySelector("input[name='firstname']").value;
    klausimas = document.querySelector("input[name='question']").value;
    emailas = document.querySelector("input[name='email']").value;


    if (vardas.length > 4 && klausimas.length > 15 && emailas.length > 5) {
        windows.location.href="/uzduotis13/zygis/5-php-mailer-js-validation/email.php"
    }else{
        //console.log("kazka pildai ne taip");
        pranesimas = document.querySelector(".error-message");
        pranesimas.innerHTML = "Prasome tinkamai uzpildyti visus laukus";
    }


    //console.log("vardas " + vardas + " klausimas: " + klausimas + " email: " + emailas);
}