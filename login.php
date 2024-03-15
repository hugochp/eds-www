<?php
    // Vérifie si les données du formulaire ont été soumises
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère les données du formulaire
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Vérifie les informations de connexion
        if ($username === "votre_nom_utilisateur" && $password === "votre_mot_de_passe") {
            // Authentification réussie, définit un cookie pour l'utilisateur
            setcookie("username", $username, time() + (86400 * 30), "/"); // cookie valide pendant 30 jours
            // Redirigez l'utilisateur vers une page protégée
            header("Location: page_protegee.php");
            exit;
        } else {
            // Authentification échouée, affichez un message d'erreur par exemple
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
?>