function calculate() {
    const age = parseInt(document.getElementById("age").value);
    const imc = parseFloat(document.getElementById("imc").value);
    const hb = parseFloat(document.getElementById("hb").value);
    const pression = parseInt(document.getElementById("pression").value);
    let result = "";
  
    // Calcul du risque de diabète en fonction des valeurs saisies
    if (age > 50 && imc >= 30 && hb >= 6.5 && pression >= 140) {
      result = "Votre risque de diabète est élevé.";
    } else if (age > 40 && imc >= 25 && hb >= 6.0 && pression >= 130) {
      result = "Votre risque de diabète est modéré.";
    } else {
      result = "Votre risque de diabète est faible.";
    }
  
    // Affichage du résultat
    document.getElementById("result").innerHTML = result;
  }
  