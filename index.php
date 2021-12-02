<?php

if (isset($_GET['login_err'])) {
    $err = htmlspecialchars($_GET['login_err']);

    switch ($err) {
        case 'password'
?>
        <div class="alert alert-danger">
            <strong>Erreur</strong>Mot de passe incorrect
        </div>
    <?php
            break;

        case 'login_length'
    ?>
    <div class="alert alert-danger">
        <strong>Erreur</strong>Login incorrect
    </div>
<?php
            break;

        case 'already'
?>
<div class="alert alert-danger">
    <strong>Erreur</strong>compte non existant
</div>
<?php
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Inscription</title>
</head>

<body>
    <header id="navbar" class="nav">
        <a href="index.php">Home</a>
        <div class="dropdown-1">
            <button id="button">Pages</button>
            <div class="content">
                <a href="inscription.php">Inscription</a>
                <a href="connexion.php">connexion</a>
                <a href="deconnexion.php">déco</a>
                <a href="profil.php">profil</a>
            </div>
        </div>
        <a class="icon" onclick="myFunction()">&#9776;</a>
    </header>
    <form action="connexion.php" method="post">
        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="login" name="login" class="form-control" placeholder="login" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
    </form>

    <?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "Vous êtes connecté";
    } else {
        echo "Vous êtes déconnecter";
    }

    ?>
</body>
<footer class="footermel">
    <div class="containerfooter">
        <div class="row">
            <div class="footer-col">
                <h4> New User?</h4>
                <ul>
                    <li><a href="inscription.php">Inscription</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Already got an account ? </h4>
                <ul>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Social Links</h4>
                <div class="social-links">
                    <a href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <a href="https://github.com/mel-hafrad" target='blank' style=color:black;>Repo github Mel Hafrad</a>
            </div>
        </div>
    </div>
</footer>

</html>