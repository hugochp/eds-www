<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Val de Bel 1850</title>
    <link rel="stylesheet" type="text/css" href="style_css.css">
</head>
<body>
    <?php include('header.php'); ?>

    <?php include('nav.php'); ?>

    <?php include('main.php'); ?>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

    <?php
    // Définition du cookie nommé 'user' avec la valeur 'John'
    setcookie('user', 'John', time() + (86400 * 30), '/'); // expire dans 30 jours
    ?>

    <?php include('connect.php'); ?>
    
</body>
</html>
