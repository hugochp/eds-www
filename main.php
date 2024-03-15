<main>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="image1.jpeg" style="width:100%">
        </div>
    
        <div class="mySlides fade">
            <img src="image2.jpeg" style="width:100%">
        </div>
    
        <div class="mySlides fade">
            <img src="image3.jpeg" style="width:100%">
        </div>
    
        <!-- Ajoutez d'autres images au besoin -->
    
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div class="login-form">
        <h2>Connexion</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</main>