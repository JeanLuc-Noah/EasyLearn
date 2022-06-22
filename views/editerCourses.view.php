<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="../../">
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

    <div class="container-formulaire">

    <div class="container--title">
        <div class="title">
            <h2>Modifier la <span>formation</span></h2>
            <p>Vous pouvez maintenant modifier la formation</p>
        </div>
        <div class="button-retour">
            <a href="dashboards/<?=$infoEnseignant["keyAccount"]?>">Rétour sur le tableau de bord&nbsp;<span class="separator"><i class="fas fa-chevron-right"></i></span></a>
        </div>
    </div>


        <div class="container--contents-formulaire">

            <div class="group-formulaire">
                
                <?php
                    if(isset($success)){
                        echo '<div class="container-msg active">'.$success.'</div>';
                    }
                    elseif(isset($msg)){
                        echo '<div class="container-msg">'.$msg.'</div>';
                    }

                ?>
                
                <form method="POST" action="" class="group-form" enctype="multipart/form-data">

                    <div class="block-input">
                        <input type="text" name="titre" value="<?=$formation["titre"]?>" placeholder="Titre">
                    </div>
                    <div class="block-input">
                        <input type="text" name="sous_titre" value="<?=$formation["sous_titre"]?>" placeholder="Sous-titre">
                    </div>

                    <div class="block-input">
                        <select name="categorie" id="">
                            <option value="<?=$formation["categorie"]?>"><?=$formation["categorie"]?></option>
                            <option value="Programmation">Programmation</option>
                            <option value="Design">Design</option>
                            <option value="Sécuriter informatique">Sécuriter informatique</option>
                        </select>
                    </div>
                    <div class="block-input">
                        <input type="time" name="nbr_heure" value="<?=$formation["heure"]?>" placeholder="Nombre d'heure">
                    </div>

                    <div class="block-textarea">
                        <textarea name="description" id="editor1" rows="10" cols="80" placeholder="Contenus du sujet...."><?=$formation["description"]?></textarea>
                    </div>
                    <div class="block-validation">
                        <input type="submit" name="validate" value="Mettre à jour">
                    </div>
                </form>
            </div>

            <!-- REGLES DE PUBLICATION -->
            <div class="group-regles">
                <div class="regle-title">
                    Les règles à respecter
                </div>
                <div class="group-blocks">
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-comments"></i></div>
                        <div class="text-regle">Rédiger la description dans un langage clair.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-heart"></i></div>
                        <div class="text-regle">Respecter les abréviations.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-hands-helping"></i></div>
                        <div class="text-regle">Donner plus de détail sur la formation.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-clock"></i></div>
                        <div class="text-regle">Publier la formation dans la categorie approprié.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-balance-scale"></i></div>
                        <div class="text-regle">Respecter la législation en vigueur.</div>
                    </div>
                </div>
            </div>

        </div> 

    </div>
    <script src="assets/plugin/ckeditor/ckeditor.js"></script>
    <script src="assets/js/ckEditor.js"></script>
</body>