// Tableau pour stocker les entrées de glycémie
let entries = [];

// Fonction pour enregistrer une nouvelle entrée
function saveEntry() {
  const date = document.getElementById("date").value;
  const time = document.getElementById("time").value;
  const bloodSugar = parseInt(document.getElementById("blood-sugar").value);

  // Créer un objet avec les données d'entrée
  const entry = {
    date: date,
    time: time,
    bloodSugar: bloodSugar
  };

  // Ajouter l'entrée au tableau
  entries.push(entry);

  // Réinitialiser les champs de formulaire
  document.getElementById("date").value = "";
  document.getElementById("time").value = "";
  document.getElementById("blood-sugar").value = "";

  // Mettre à jour le tableau d'affichage
  updateTable();
}

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
