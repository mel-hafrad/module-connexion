<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <form action="inscription_traitements.php" method="POST">
        <!-- on traite sur une page speciale-->
        <h2 class="text-center">Inscription</h2>
        <div class="form-group">
            <input type="text" name="login" class="form-control" placeholder="login" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="prenom" name="prenom" class="form-control" placeholder="prenom" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="nom" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="password" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password_retype" class="form-control" placeholder="password_retype" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Inscription</button>
        </div>
    </form>

</body>

</html>