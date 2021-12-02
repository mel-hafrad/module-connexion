<?php
require_once 'bdd.php';

if (isset($_POST['login']) && $_POST['nom'] && $_POST['prenom'] && $_POST['password'] && $_POST['password_retype']) {
    $login = htmlspecialchars($_POST['login']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    // maintenant je veux vérifier si la personne existe dans la base de donnée
    $check = $bdd->prepare('SELECT login , password FROM utilisateurs WHERE login =?');
    $check->execute(array($login));
    $data = $check->fetch();
    $row = $check->rowCount();

    // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
    if ($row == 0) {
        if (strlen($login) <= 100) { // On verifie que la longueur du login <= 100
            if (strlen($nom) <= 100) { // On verifie que la longueur du nom <= 100
                if ($password === $password_retype) { // si les deux mdp saisis sont bon

                    // On hash le mot de passe avec Bcrypt, via un coût de 12
                    $cost = ['cost' => 12];
                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                    // On insère dans la base de données
                    $insert = $bdd->prepare('INSERT INTO utilisateurs(login, nom, prenom,  password) VALUES(:login, :nom, :prenom, :password)');
                    $insert->execute(array(
                        'login' => $login,
                        'prenom' => $prenom,
                        'nom' => $nom,
                        'password' => $password,
                    ));
                    // On redirige avec le message de succès
                    header('Location:inscription.php?reg_err=success');
                    die();
                } else {
                    header('Location: inscription.php?reg_err=password');
                    die();
                }
            } else {
                header('Location: inscription.php?reg_err=nom');
                die();
            }
        } else {
            header('Location: inscription.php?reg_err=pseudo_length');
            die();
        }
    } else {
        header('Location: inscription.php?reg_err=already');
        die();
    }
}
?>











<?php
if (isset($_GET['reg_err'])) {
    $err = htmlspecialchars($_GET['reg_err']);

    switch ($err) {
        case 'success':
?>
            <div class="alert alert-success">
                <strong>Succès</strong> inscription réussie !
            </div>
        <?php
            break;

        case 'password':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> mot de passe différent
            </div>
        <?php
            break;

        case 'email':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> email non valide
            </div>
        <?php
            break;

        case 'email_length':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> email trop long
            </div>
        <?php
            break;

        case 'pseudo_length':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> pseudo trop long
            </div>
        <?php
        case 'already':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> compte deja existant
            </div>
<?php

    }
}
?>