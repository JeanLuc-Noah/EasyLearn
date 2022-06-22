<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="../../">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$formationParamsID['titre']?></title>
    <meta name="descrition" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$formationParamsID['id_course']?>">
    <meta property="og:site_name" content="<?= WEBSITE_NAME ;?>.com">
    <meta property="og:language" content="fr">
    <meta property="og:title" content="Courses | <?=WEBSITE_NAME?>">
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
    <link rel="stylesheet" type="text/css" href="assets/css/subscriber.css">
</head>
<body>
    <header class="reveal">

        <!------- ICON HAMBUGER --------->
        <div class="container-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <!----------- LOGO ------------>
        <div class="container-logo">
            <a href="#" >
                <img src="assets/logos/logo.png" alt="logo easyLearn">
            </a>
        </div>

        <!----------- CONTAINER NAVBARS ------------>
        <nav class="container-navbars">
            <ul>
                <li><a href="courses/<?=$InfoEtudiant['keyAccount']?>" target="_blank">Cours</a></li>
                <li><a href="">Forum</a></li>
                <li><a href="">Reviews</a></li>
                <li><a href="">Formateurs</a></li>
                <li><a href="">A propos</a></li>
            </ul>
        </nav>

        <!----------- NAVBARS OTHER ------------>
        <div class="container-navbars-other">
            <div class="group-icons">
                <div class="group--icon">
                    <button type="button" class="btn-popup-search"><i class="fas fa-search"></i></button>
                </div>
                <div class="group--icon">
                    <button type="button"><i class="fas fa-bell"></i></button>
                </div>
            </div>

            <!-------- GROUP-AVATAR ------->
            <div class="group-avatar">
                <button>
                    <?php 
                        $profil = $InfoEtudiant['avatar'];
                        if(empty($profil)){
                            include "assets/icons/user_icon.php";
                        }
                        else{?>
                            <img src="members/user/<?=$profil?>" alt="profil <?=$InfoEtudiant['nom']?>" srcset="">
                        <?php } ?>
                </button>
            </div>

        </div>

        <!----------- CONTAINER-POPUP SEARCH ------------>
        <div class="container-popup-search">
            <form method="" action="">
                <div class="block-input">
                    <input type="text" name="q" placeholder="Rechercher un cours">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="container--overlay-popupSearch reveal"></div>
            <div class="close-search-overlay">&times</div>
        </div>
    </header>
    
    <!----------- CONTAINER D'INSCRIPTION DE FORMATION ------------>
    <div class="containe-subscriber">
        <div class="container----Overlayminiature" style='background-image:url(thumb/images/<?=$formationParamsID['miniature']?>)'>
        </div>

        <!------------ CONTENT DE LA FORMATION --------->
        <div class="container--overlayBackground">
            <div class="content--categorie">
                <a href="">Formations</a>&nbsp;<span class="separator"><i class="fas fa-chevron-right"></i></span>&nbsp;
                <a href=""><?=$formationParamsID['categorie']?></a>&nbsp;<span class="separator"><i class="fas fa-chevron-right"></i></span>&nbsp;
                <span><?=$formationParamsID['titre']?></span>
            </div>
            <div class="content--title">
                <h1><?=$formationParamsID['titre']?></h1>
            </div>
            <div class="content--description">
                <p><?=$formationParamsID['sous_titre']?></p>
            </div>
            <div class="content--heure">
                <span class="emoticon">Meilleure formation</span> -
                <span class="heure"><?=$formationParamsID['heure']?> heures</span><br/><br/>
                <span>Créé par : Dr. Angela Yu</span>
            </div>     


            <div class="content--formulaire">
                <div class="content--formMiniature">
                    <img src="thumb/images/<?=$formationParamsID['miniature']?>" alt="">
                </div>
                <form action="" method="post">
                    <?php
                        if($formationDejaInscrit == null){
                            echo "<button type='submit' name='inscription'>Souscrire formation</button>";
                        }
                        else{
                            echo "<button type='button'>vous êtes déja incrit </button>"; 
                        }
                    ?>
                </form>
            </div>
        </div>

    </div>
    
    <!----------- CONTAINER MODULE ------------>
    <div class="container-module">
        <?= $module_formation["contenus"]?>               
    </div>
    


</body>
</html>