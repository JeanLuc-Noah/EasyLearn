<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord | <?=WEBSITE_NAME?></title>
    <meta name="descrition" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/dashboard/">
    <meta property="og:site_name" content="<?= WEBSITE_NAME ;?>.com">
    <meta property="og:language" content="fr">
    <meta property="og:title" content="dashboard | <?=WEBSITE_NAME?>">
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
    <link rel="stylesheet" type="text/css" href="assets/css/enseignant.css">
</head>
<body>
    <header class="reveal">
            <!------- ICON HAMBUGER --------->
            <div class="container-toggle">
                <i class="fas fa-bars"></i>
            </div>

            <!----------- LOGO ------------>
            <div class="container-logo">
                <a href="dashboard/<?=$infoEnseignant['keyAccount']?>" >
                    <img src="assets/logos/logo.png" alt="logo easyLearn">
                </a>
            </div>

            <!----------- CONTAINER-MENU ------------>
            <div class="container-menu">
                <nav class="container--navbars">
                    <ul>
                        <li><a class="active" href="dashboard">Tableau de bord</a></li>
                    </ul>
                </nav>
            </div>
            
            <!----------- CONTAINER-GROUPS ------------>
            <div class="container-groups">
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
                            $profil = $infoEnseignant['avatar'];
                            if(empty($profil)){
                                include "assets/icons/user_icon.php";
                            }
                            else{?>
                                <img src="members/user/<?=$profil?>" alt="profil <?=$infoEnseignant['nom']?>" srcset="">
                            <?php } ?>
                    </button>
                </div>
            </div>
            

            <!----------- CONTAINER-SIDEBAR ------------>
            <div class="container-sidebar">
                <nav class="sidebar-menu">
                    <ul>
                        <li><a class="elemment-a" href="">Tablau de bord</a>
                            <div class="sidebar-submenu">
                                <div class="data-user" data-user="dashboards/<?=$infoEnseignant['keyAccount']?>" style="display: none;"></div>
                                <div class="sub--menu"><a href="dashboards/<?=$infoEnseignant['keyAccount']?>#list-courses" class="link-onglet active" data-onglet="1" >Liste des cours</a></div>
                                <div class="sub--menu"><a href="dashboards/<?=$infoEnseignant['keyAccount']?>#gerer-courses" class="link-onglet" data-onglet="2" >Gérer cours</a></div>
                                <div class="sub--menu"><a href="dashboards/<?=$infoEnseignant['keyAccount']?>#new-testQCM" class="link-onglet" data-onglet="3">Créer testQCM</a></div>
                                <div class="sub--menu"><a href="dashboards/<?=$infoEnseignant['keyAccount']?>#upload" class="link-onglet" data-onglet="4">Uploader fichier</a></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

    </header>


    <!-- CONTAINER-MAIN PRINCIPALE -->
    <div class="container-main">

        <?php
            include "partials/_liste_cours.php";
            include "partials/_gererCours.php";
        ?>
    </div>

    <script src="assets/js/enseignant-app.js"></script>
</body>
</html>