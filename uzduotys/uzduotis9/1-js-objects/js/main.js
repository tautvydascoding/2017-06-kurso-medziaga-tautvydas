console.log("labas");
// ----------puslapio nustaytmai---------

// kuriame obj
zmogus = {
  vardas: "Tomas",
  amzius: 13,
  as: 321456685489
};

// FOR ciklas, kuris skirtas begti per Obj- informacija
for (x in zmogus) {
  console.log("reikme: " + zmogus[x]);
}

// irgi tinkamas begti per masyva
vardai = ["Jonas", "Tomas", "Paulius"];
for (y in vardai  ) {
    console.log("masyvo reikme: " + vardai[y]);
    // rasim tik pirmaji is saraso Toma
    if( vardai[y] == "Tomas" ) {
      console.log("Radau Toma.");
      break;
    }
}




//
