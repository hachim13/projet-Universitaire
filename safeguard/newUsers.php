<?php
// Vérification des données du formulaire de création d'identifiants
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password_db = " ";
    $database = "safeguard";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password_db, $database);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Échappement des données utilisateur
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Requête préparée pour insérer les nouveaux identifiants dans la base de données
    $stmt = $conn->prepare("INSERT INTO utilisateurs (email, mot_de_passe) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Nouveaux identifiants créés avec succès.";
    } else {
        echo "Erreur lors de la création des identifiants : " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
</head>
<body>
    <h1>Création d'identifiants</h1>
    <form action="admin.php" method="POST">
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="submit" value="Créer">
    </form>
</body>
</html>
