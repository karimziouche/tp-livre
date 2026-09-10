<?php

session_start();

foreach ($_SESSION ["cart"] as $book) {
    echo $book . "<br>";
}

?>