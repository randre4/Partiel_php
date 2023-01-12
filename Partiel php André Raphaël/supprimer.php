<?php
// Établir une connexion à la base de données
$conn = mysqli_connect('localhost', 'root', 'root', 'partiel_php');

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Préparer la commande de suppression en ajoutant le nom de la personne que l'on veut supprimer. Il est possible de cibler un "id" directement en remplaçant le "nom" par id et 
// John par le numéro de l'id que l'on veut supprimer
$sql = "DELETE FROM partiel_php WHERE nom = 'John'";

// Exécuter la commande de suppression
if (mysqli_query($conn, $sql)) {
    echo "Suppression réussie";
    // Rediriger vers la page index.php
    header("Location: index.php");
    exit;
} else {
    echo "Erreur lors de la suppression : " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>