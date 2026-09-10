<?php
session_start();

if (!empty($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <form method="post">
            <label for="name">Nom :</label> 
            <input type="text" id="name" name="name">
            <button type="submit">Se connecter</button>
        </form>
    </head>
</html>

<?php

