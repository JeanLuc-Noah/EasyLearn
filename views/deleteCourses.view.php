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

    </header>

    <div class="container-suppression">

        <div class="container--title-Suppresion">
            <h2>Liste des cours <span>publiés</span></h2>
            <p>Veuillez choisir une formation</p>
        </div>

        <div class="container--suppression-formation">
            <?php
                foreach($allFormation_enseignant as $formation):?>

                <div class="suppresion-formation">
                    <div class="titleFormation-suppresion">
                        <a href=""><?=$formation["titre"]?></a>
                    </div>
                    <div class="status-suppresion">
                        <?php
                            if($formation["status"] == 0){
                                echo "<span><i class='far fa-eye-slash'></i></span>&nbsp; Non visible";
                            }
                            else{
                                echo "<span><i class='far fa-eye'></i></span>&nbsp; Visible";
                            }
                        ?>
                    </div>
                    <div class="button-suppresion">
                        <a href="" class="btn-suppression"  data-id="<?=$formation["id_course"]?>">
                            <span><i class="far fa-trash-alt"></i></span>
                            Supprimer
                        </a>
                    </div>
                </div>

                <?php endforeach ?>
        </div>
    </div>
    
    <script src="assets/js/delete.js"></script>
</body>
</html>