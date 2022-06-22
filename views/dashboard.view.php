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
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
</head>
<body>

    <header class="reveal">
        <!------- ICON HAMBUGER --------->
        <div class="container-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <!----------- LOGO ------------>
        <div class="container-logo">
            <a href="dashboard/<?=$InfoEtudiant['keyAccount']?>" >
                <img src="assets/logos/logo.png" alt="logo easyLearn">
            </a>
        </div>

        <!----------- CONTAINER-MENU ------------>
        <div class="container-menu">
            <nav class="container--navbars">
                <ul>
                    <li><a class="active" href="dashboard">Formations</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="">Formation professionnel</a></li>
                    <li><a href="forum">Forum</a></li>
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

        <!----------- CONTAINER-SIDEBAR ------------>
        <div class="container-sidebar">
            <div class="logo-menu">
                <a href="#">
                    <img src="assets/logos/logo.png" alt="logo easyLearn">
                </a>
            </div>

            <nav class="sidebar-menu">
                <ul>
                    <li><a class="elemment-a" href="">Mes cours</a>
                        <div class="sidebar-submenu">
                            <div class="data-user" data-user="dashboard/<?=$InfoEtudiant['keyAccount']?>" style="display: none;"></div>
                            <div class="sub--menu"><a href="dashboard/<?=$InfoEtudiant['keyAccount']?>#courses-followed" class="link-onglet active" data-onglet="1" >Cours suivis</a></div>
                            <div class="sub--menu"><a href="dashboard/<?=$InfoEtudiant['keyAccount']?>#last-courses-post" class="link-onglet" data-onglet="2">Dérniers cours publiés</a></div>
                            <div class="sub--menu"><a href="dashboard/<?=$InfoEtudiant['keyAccount']?>#new-course" class="link-onglet" data-onglet="3">Nouveau cursus</a></div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

    </header>

    <!-- CONTAINER-MAIN PRINCIPALE -->
    <div class="container-main">
        
        <!-- GROUPE DES COURS INSCRITS DE L'ETUDIANT -->
        <div class="container-courses reveal tabs-content active" data-onglet="1">
            <div class="container--title-coursesFollowed">
                <h2>Cours suivis</h2>
            </div>
            
            <div class="container--fluid-courses">

                <div class="group-secondaryTitles">
                    <div class="name-courses">Cours</div>
                    <div class="date-courses">Inscription</div>
                    <div class="certificat-courses">Certificats</div>
                </div>

                <div class="group-courses">
                    <?php

                    //Parcours le tableau des suscription de formation
                    foreach ($formationSouscrit as $coursInscrit) :
                        $coursEtudiant = $Ctr_Utilisateurs->formationsParID($coursInscrit['id_course']);
                    ?>
                    
                    <div class="group--course">
                        <div class="block-name">
                            <a href=""><?=$coursEtudiant['titre']?></a>
                        </div>
                        <div class="block-date">
                            <?=$coursInscrit["date_suscriber"]?>
                        </div>
                        <div class="block-certificat">
                            <?php include "assets/icons/certificat.php"?>
                        </div>
                    </div>

                    <?php endforeach ?>
                </div>
            </div>

            <div class="container--addCourse">
                <a href="courses/<?=$InfoEtudiant["keyAccount"]?>">Ajouter nouvelle formation</a>
            </div>
        </div>

        <div class="container-lastCourses-post reveal tabs-content" data-onglet="2">
            <div class="container--title-lastCourses">
                <h2>Derniers cours publiés</h2>
            </div>

            <div class="group-courses-lastPost">
                <?php 
                    extract($lastFormationsPublished);
                    foreach ($lastFormationsPublished as $lastCourses_post): 
                ?>

                    <div class="course-lastPost">
                        <div class="course-miniature">
                            <a href="" style="background-image:url(thumb/images/<?=$lastCourses_post['miniature']?>);"></a>
                        </div>
                        <div class="course-categorie">
                            <?=$lastCourses_post['categorie']?>
                        </div>
                        <div class="course-title">
                            <a href=""><?=$lastCourses_post['titre']?></a>
                        </div>
                        <div class="course-consult">
                            <a href="">consulter</a>
                        </div>
                        <div class="course-overlay">
                            <div class="title--overlay-course">
                                <a href=""><?=$lastCourses_post['titre']?></a>
                            </div>
                            <div class="description--overlay-course">
                                <a href=""><?=$lastCourses_post['sous_titre']?></a>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach ?>
            </div>
        </div>

        <div class="container-cursus reveal tabs-content" data-onglet="3" style="padding: 50px; text-align:center">
            <h1 style="color: #333; font-size:22px">Aucun cursus</h1>
        </div>

    </div>

    <div class="container-footer reveal">
        <footer>
            <div class="content--footer">
                <div class="title--group-footer">EasyLearn</div>
                <div class="content--group-footer">
                    <ul>
                        <li><a href="">Offres</a></li>
                        <li><a href="">Fonctionnalités</a></li>
                        <li><a href="">Aide</a></li>
                        <li><a href="">À propos</a></li>
                        <li><a href="">Carrières</a></li>
                    </ul>
                </div>
            </div>

            <div class="content--footer">
                <div class="title--group-footer">Qui sommes-nous ?</div>
                <div class="content--group-footer">
                    <ul>
                        <li><a href="">Universités</a></li>
                        <li><a href="">Formateurs</a></li>
                    </ul>
                </div>
            </div>

            <div class="content--footer">
                <div class="title--group-footer">Légal</div>
                <div class="content--group-footer">
                    <ul>
                        <li><a href="">Mentions légales</a></li>
                        <li><a href="">Conditions générales d'utilisation</a></li>
                        <li><a href="">Politique de protection des données</a></li>
                        <li><a href="">Cookies</a></li>
                    </ul>
                </div>
            </div>

            <div class="content--footer">
                <div class="title--group-footer">Cookies</div>
                <div class="content--group-footer">
                    <div class="group-icons-sociaux">
                        <div class="icon-sociaux">
                            <a href="" target="_"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="icon-sociaux">
                            <a href="" target="_"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="icon-sociaux">
                            <a href="" target="_"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="icon-sociaux">
                            <a href="" target="_"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="group-copyright">
                        <span class="copyright">© 2021 <?=WEBSITE_NAME?></span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/dashboard.app.js"></script>
</body>
</html>