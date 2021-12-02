<?php


try {
    $bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('ERREUR' . $e->getMessage());
}
