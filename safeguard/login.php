
<?php

include('connexion.html');


// Vérification des données du formulaire de connexion
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $database = "safeguard";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password_db, $database);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Requête SQL pour vérifier l'utilisateur dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Utilisateur valide, redirigez vers la page souhaitée
        header("Location: page_principale.php");
        exit();
    } else {
        // Identifiants invalides, affichez un message d'erreur
        echo "Identifiants invalides";
    }

    $conn->close();
}
?>
