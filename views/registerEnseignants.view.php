<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription |<?=WEBSITE_NAME?></title>
    <meta name="descrition" content="Inscrivez-vous pour votre expérience, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Inscrivez-vous pour votre expérience,, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/register">
    <meta property="og:site_name" content="<?= WEBSITE_NAME ;?>.com">
    <meta property="og:language" content="fr">
    <meta property="og:title" content="Inscription | <?=WEBSITE_NAME?>">
    <meta name="author" content="Jean-Luc Sangwa Kahenga">

    <!------- lien des icons shortcut " ------>
    <!------- lien des feuilles de style ------>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>
    
    <div class="group-content">
        
        <!---------- FORMULAIRE D'INSCRIPTION ---->
        <div class="group-form">

            <!------ LOGO ------>
            <div class="logo">
                <img src="assets/logos/logo-easy.png" alt="logo">
            </div>

            <!----- FORMULAIRE INSCRIPTION ------>
            <form action="" method="POST" class="container-form">

                <div class="block-titre">
                    <h2>Espace d'inscription pour enseignant !</h2>
                </div>
                <?php
                    if(isset($msg)){
                        echo "<div class='msg-error'>".$msg."</div>";
                    }
                    elseif(isset($success)){
                        echo "<div class='msg-error succes'>".$success."</div>";
                    }
                ?>
                <div class="block-input">
                    <input type="text" name="username"  placeholder="Prénom et nom" >
                </div>
                
                <div class="block-input">
                    <input type="email" name="email" placeholder="Adresse email" >
                </div>

                <div class="block-input">
                    <input type="password" name="password" placeholder="Mot de passe">
                </div>

                <div class="group-blocks">
                    <div class="block-input">
                        <select name="identite" >
                            <option value="identite">Identité</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <div class="block-input">
                        <select name="age" id="">
                            <option value="0">Âge</option>                            
                            <?php
                                for ($i=15; $i <= 99; $i++) { ?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?php }?>
                        </select>
                    </div>
                </div>

                <div class="cgu">
                    En cliquant sur "Inscription", vous acceptez les <a href="">Conditions générales d'utilisation</a> et la <a href="">Politique de protection des données</a>
                </div>

                <div class="block-button">
                    <button type="submit" name="valideRegister">Inscription</button>
                </div>

                <div class="question">
                     Vous avez déjà un compte ? <a href="login">Connectez-vous</a>
                </div>
            </form>
        </div>

        <!------- GROUPE IMAGE ------>
        <div class="group-image">
            <div class="overlay-image">
                
            </div>
        </div>

    </div>
</body>
</html>