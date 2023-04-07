<?php
    session_start();
    include_once("./includes/data.inc.php");

?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connexion.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>Gmail</title>
</head>

<body>
    <header>
        <a href="#"><img class="logo" src="./asset/gmail_logo.png" alt="logo"></a>
        <nav>
            <ul class="navigation">
                <li><a href="#help"> POUR LES PROS</a></li>
                <li><a href="./connexion.html"> CONNEXION</a></li>
                <li><a href="./index.html">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>

    <main>

<div class="formulaire">

    <h2>Connectez vous a votre compte</h2>

        <fieldset id="account">
                <legend>Connexion</legend>
                   <form method="post">
                
                        <label for="email">Mail</label> <br>
                        <input type="text" id="email" name="mail" placeholder="Votre mail" aria-required="true"> <br>
                        <label for="password">Mot de passe</label> <br>
                        <input type="password" id="password" name="psw" placeholder="Votre mot de passe" aria-required="true"> <br>
                
                    <div class="bouton">
                    <input type="submit" id="submit" value="Valider votre compte" aria-label="Valider">
                    </div>
                
                   </form>
                   <?php
                include_once("./includes/login.inc.php");
            ?>

            </fieldset>
</div>            
    </main>

    <footer>

    </footer>
</body>
</html>