<?php

session_start();

if (empty($_SESSION["name"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Le petit prince</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="header">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="burger">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <nav class="menu">
                <?php
                    if (!empty($_SESSION["name"])) {
                    echo "Bienvenu à " . $_SESSION["name"];
                    } else {
                    echo "Bienvenue à Donkey";
                    }
                ?>
                <a href="index.php">Accueil</a>
                <a href="cart.php">Mon panier</a>
                <a href="nous-contacter.php">Nous contacter</a>
                <a href="logout.php">Déconnexion</a>
            </nav>
            <h1>Ma bibliothèque</h1>
        </header>
        <main class="page-detail">
            <section class="detail-livre">
                <div class="image-fleche">
                <input type="checkbox" id="fleche">
                    <div class="detail-image">
                        <img src="lepetitprince.jpg" alt="Le petit prince">
                    </div>
                    <div class="detail-premiere-de-couverture">
                        <img src="le petit prince derriere.jpg" alt="Le petit prince">
                    </div>
                    <label for="fleche" class="bouton-fleche"></label>
                </div>
                <div class="detail-contenu">
                    <h2>le petit prince</h2>
                    <p><strong>Auteur :</strong> Antoine de Saint-Exupéry</p>
                    <p><strong>Année :</strong> 1943 </p>
                    <h3>Résumé</h3>
                    <p>Le petit prince raconte le voyage d'un jeune garçpn venu d'une autre planète. A travers ses rencontres, il découvre le monde des adultes et transmet des leçons sur l'amitié, l'amour et la vie.</p>
                    <a href="index.html" class="retour">Retour</a>
                </div>
            </section>
        </main>
        <footer class="footer">
            <p>&copy; 2026 Ma bibliothèque</p>
        </footer>
    </body>
</html>