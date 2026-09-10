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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Harry Potter</title>
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
                        <img src="harrypotter.jpg" alt="Harry Potter">
                    </div>
                    <div class="detail-premiere-de-couverture">
                        <img src="harrypotter-derriere.jpg" alt="Harry Potter">
                    </div>
                    <label for="fleche" class="bouton-fleche"></label>
                </div>
                <div class="detail-contenu">
                    <h2>Harry Potter à l'école des sorciers</h2>
                    <p><strong>Auteur :</strong> J.K Rowling</p>
                    <p><strong>Année :</strong> 1997</p>
                    <h3>Résumé</h3>
                    <p>Harry Potter découvre qu'il est un sorcier le jour de ses onze ans. Il entre à l'école de Poudlard où il se fait de nouveaux amis et affronte les forces du mal dirigées par Lord Voldemort.</p>
                    <a href="index.html" class="retour">Retour</a>
                </div>
            </section>
        </main>
        <footer class="footer">
            <p>&copy; 2026 Ma bibliothèque</p>
        </footer>
    </body>
</html>