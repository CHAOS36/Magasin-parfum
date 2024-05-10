<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>
<! DOCTYPE HTML>
<HTML>
<head>
        <meta charset="utf-8">
        <title>page blanche</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="container col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
    <div class="panel panel-primary margetop">
        <div class="panel-heading">Se connecter :</div>
        <div class="panel-body">
            <form method="post" action="seConnecter.php" class="form">

                <?php if (!empty($erreurLogin)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $erreurLogin ?>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <label for="login">Login :</label>
                    <input type="text" name="login" placeholder="Login"
                           class="form-control" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" name="pwd"
                           placeholder="Mot de passe" class="form-control"/>
                </div>

                <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-log-in"></span>
                    Se connecter
                </button>
                <p class="text-right">
                    <a href="nouvelUtilisateur.php">Créer un compte</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</HTML>