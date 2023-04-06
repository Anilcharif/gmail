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
    <link rel="icon" type= "image/ico" href="./asset/images.png">  
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Gmail</title>
</head>

<body>
    <header>
        <a href="#"><img class="logo" src="./asset/gmail_logo.png" alt="logo"></a>
        <nav>
            <ul class="navigation">
                <li><a href="#help">POUR LES PROS</a></li>
                <li><a href="./connexion.html">CONNEXION</a></li>
                <li><a href="#account">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Retrouvez la simplicite et la fluidite de Gmail sur tout vos appareil</h2>
            <a class="create" href="#account">CRÉER UN COMPTE</a>
        </section>

          <a href="#" class="fleche"><img class="logo" src="./asset/arrow.png" alt="logo" loading="lazy"></a>
        
        
        

<div class="formulaire">

    <h2>Une boîte de réception entièrement repensée</h2>

    <h3>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité.</h3>
        <fieldset id="account">
                <legend>Créer un compte</legend>
                   <form>
                
                    
                        <label for="nom">Nom</label> <br>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" aria-required="true" autofocus> <br>
                
                        <label for="prenom">Prénom</label> <br>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" aria-required="true"> <br>
                
                        <label for="email">Mail</label> <br>
                        <input type="text" id="email" name="email" placeholder="Votre mail" aria-required="true"> <br>

                        <label for="password">Mot de passe</label> <br>
                        <input type="password" id="password" name="psw" placeholder="Votre mot de passe" aria-required="true"> <br>
                
                    <div class="bouton">
                    <input type="submit" id="submit" value="Valider votre compte" aria-label="Valider">
                    </div>
                
                   </form>

                   
                    <?php
                    //inclusion
                    include_once "./includes/inscription_user.inc.php";
                    ?>
            </fieldset>
</div>    

    </main>

    <footer>

    </footer>





</body>
</html>
