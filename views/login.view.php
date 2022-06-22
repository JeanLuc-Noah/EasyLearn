<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion <?=WEBSITE_NAME?></title>
    <meta name="descrition" content="Connectez-vous pour commencer votre expérience, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Connectez-vous pour commencer votre expérience,, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/login">
    <meta property="og:site_name" content="<?= WEBSITE_NAME ;?>.com">
    <meta property="og:language" content="fr">
    <meta property="og:title" content="Connexion | <?=WEBSITE_NAME?>">
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
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
   
    <div class="container-login-flex">

        <div class="container--form reveal">

            <!-- LOGO -->
            <div class="logo">
                <img src="assets/logos/logo.png" alt="logo">
            </div>

            <form method="" action="" class="group-form">

                <div class="block-title">
                    <h2>Connectez-vous pour commencez votre experience sur <?=WEBSITE_NAME?> !</h2>
                </div>

                <div class="group-medias-sociaux">
                    <div class="block-media-sociaux">
                        <a href=""><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                    </div>

                    <div class="block-media-sociaux">
                        <a href=""><?php include "assets/icons/google.php"?> &nbsp; Google</a>
                    </div>
                </div>

                <!----- SEPARATEUR----->
                <div class="barre-separateur">
                    <span>Ou</span>
                </div>
                
                <div class="block-msg"></div>
                <div class="groupBlocks-input">
                    <div class="block-input">
                        <input type="email" name="email" placeholder="Adresse email" >
                    </div>

                    <div class="block-input">
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>

                    <div class="group-rememberme">
                        <div class="block-rememberme">
                            <input type="checkbox" name="rememberme" id="rememberme">
                            <label for="rememberme">Se souvenir de moi</label>
                        </div>

                        <div class="block-mtpOublier">
							<a href="">Mot de passe oubliér ?</a>
						</div>
                    </div>

                    <div class="block-button">
                        <button type="submit" name="valide">Connexion</button>
                    </div>

                    <div class="question">
                         Vous êtes non-inscrit ? <a href="register">Inscrivez-vous</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="container--image reveal">

        </div>
    </div>
    <script src="assets/js/login.js"></script>
</body>
</html>