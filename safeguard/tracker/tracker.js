// Tableau pour stocker les entrées de glycémie
let entries = [];

$(function () {
  $("#saveGlycemie").click(function () {
    const date = $("#date").val();
    const time = $("#time").val();
    const bloodSugar = parseInt($("#blood-sugar").val());
    saveEntry(date, time, bloodSugar);
  });

  
  // Fonction pour enregistrer une nouvelle entrée
  function saveEntry(date, time, bloodSugar) {
    
    // Créer un objet avec les données d'entrée
    const dto = {
      date,
      time,
      bloodSugar
    };

    
    // envoie des données dans la base
    $.ajax({
      type: "POST",
      url: "saveGlycemieData.php",
      data: dto,
      success: function (response) {
        if (response === '1') {
          RefreshTable();
        }
      },
      error: function (error) {
        console.log("error", error);
      }
    })


    // Réinitialiser les champs de formulaire
    document.getElementById("date").value = "";
    document.getElementById("time").value = "";
    document.getElementById("blood-sugar").value = "";

  }

  function RefreshTable() {
       $("#entries").load("tracker.php #entries");
   }

});




// Fonction pour mettre à jour le tableau d'affichage
function updateTable() {
  const tableBody = document.querySelector("#entries tbody");
  tableBody.innerHTML = "";

  for (let i = 0; i < entries.length; i++) {
    const entry = entries[i];
    const row = document.createElement("tr");
    const dateCell = document.createElement("td");
    const timeCell = document.createElement("td");
    const bloodSugarCell = document.createElement("td");

    dateCell.textContent = entry.date;
    timeCell.textContent = entry.time;
    bloodSugarCell.textContent = entry.bloodSugar;

    row.appendChild(dateCell);
    row.appendChild(timeCell);
    row.appendChild(bloodSugarCell);
    tableBody.appendChild(row);
  }
}
