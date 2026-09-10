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
        <title>Les misérables</title>
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
                        <img src="lesmisérables.jpg" alt="Les misérables">
                    </div>
                    <div class="detail-premiere-de-couverture">
                        <img src="les-misérables-derriere.jpg" alt="Les misérables">
                    </div>
                    <label for="fleche" class="bouton-fleche"></label>
                </div>
                <div class="detail-contenu">
                    <h2>Les misérables</h2>
                    <p><strong>Auteur :</strong>Victor Hugo</p>
                    <p><strong>Année :</strong>1862</p>
                    <h3>Résumé</h3>
                    <p>L'histoire de Jean Valjean, un ancien forçat qui tente de refaire sa vie tout en étant poursuivi par l'inspecteur Javet. Le roman aborde la justice, la pauvreté, l'amour et la rédemption.</p>
                    <a href="index.html" class="retour">Retour</a>
                </div>
            </section>
        </main>
        <footer class="footer">
            <p>&copy; 2026 Ma bibliothèque</p>
        </footer>
    </body>
</html>