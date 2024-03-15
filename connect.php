<?php

// Informations de connexion à la base de données
$serveur = "127.0.0.1"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$baseDeDonnees = "base_val_de_bel"; // Nom de la base de données à laquelle se connecter

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Requête SQL pour récupérer les données de la table "forfait"
$req = "SELECT * FROM `forfait`";

// Exécution de la requête
$resultat = mysqli_query($connexion, $req);

// Vérifier si la requête s'est bien exécutée
if ($resultat) {
    // Affichage des données
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "ID: " . $row['id_forfait'] . "<br>";
        echo "Type: " . $row['type'] . "<br>";
        echo "Prix: " . $row['prix'] . "<br>";
        echo "Nom: " . $row['nom'] . "<br>";
        echo "Durée: " . $row['durée'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($connexion);
}

// Fermer la connexion
mysqli_close($connexion);
?>
