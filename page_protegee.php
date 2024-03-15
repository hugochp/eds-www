<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Protégée</title>
</head>
<body>
    <h1>Bienvenue sur la page protégée</h1>
    
    <?php
    // Vérifie si le cookie "username" est défini
    if (isset($_COOKIE["username"])) {
        // Affiche le nom d'utilisateur stocké dans le cookie
        echo "<p>Vous êtes connecté en tant que : " . $_COOKIE["username"] . "</p>";
    } else {
        // Si le cookie n'est pas défini, affichez un message d'erreur
        echo "<p>Erreur : Vous n'êtes pas connecté.</p>";
    }
    ?>

    <p><a href="logout.php">Déconnexion</a></p>
</body>
</html>