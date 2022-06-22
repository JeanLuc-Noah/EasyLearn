<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | <?=WEBSITE_NAME?></title>
    <meta name="descrition" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/courses/<?=$InfoEtudiant['keyAccount']?>">
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
    <link rel="stylesheet" type="text/css" href="assets/css/courses.css">
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
                <li><a class="active" href="">Cours</a></li>
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

    <!-- CONTAINER PRESENTATION -->
    <div class="container-presentation reveal">
        <div class="container--fluid-presentation">
            <div class="conteiner--content texte-presentaion">
                <h1 class="reveal-2">Dépasser les limites avec <?=WEBSITE_NAME?>.</h1>
                <p class="reveal-3">N'importe quand, n'importe ou pour suivre une formation </p>

                <div class="group-buttons-presentation">
                    <div class="block-button">
                        <button type="button">Commencer</button>
                    </div>
                    <div class="block-button">
                        <button type="button">Dévenir instructeur</button>
                    </div>
                </div>
            </div>
            <div class="conteiner--content image-presentation"></div>
        </div>

        <div class="container--aside">
            <div class="block-aside">
                <div class="block--content-aside compass">
                    <div class="icon-aside compass"><i class="fas fa-compass"></i></div>
                    <div class="overlay-icon-aside compass"><i class="fas fa-compass"></i></div>
                </div>
                <span>Tutoriel en ligne</span>
            </div>

            <div class="block-aside">
                <div class="block--content-aside watch">
                    <div class="icon-aside watch"><i class="fas fa-stopwatch-20"></i></div>
                    <div class="overlay-icon-aside watch"><i class="fas fa-calendar"></i></div>
                </div>
                <span>Accès à vie</span>
            </div>

            <div class="block-aside">
                <div class="block--content-aside user">
                    <div class="icon-aside user"><i class="fas fa-user"></i></div>
                    <div class="overlay-icon-aside user"><i class="fas fa-user"></i></div>
                </div>
                <span>Apprentissage actif</span>
            </div>

            <div class="block-aside">
                <div class="block--content-aside book">
                    <div class="icon-aside book"><i class="fas fa-book"></i></div>
                    <div class="overlay-icon-aside book"><i class="fas fa-sticky-note"></i></div>
                </div>
                <span>10k Cours</span>
            </div>
        </div>
    </div>


    <!------------ TOUTS LES FORMATIONS ----------->

    <div class="container-courses reveal">
        <div class="container--fluid-courses">
           
            <!-- DERNIER COURS PUBLIER -->
            <div class="container--lastCourses-published">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Dérniers cours publiés</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        extract($DerniersFormationsPublier);
                        foreach ($DerniersFormationsPublier as $formation_lastPublished): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$formation_lastPublished['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$formation_lastPublished['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$formation_lastPublished['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$formation_lastPublished['id_course']?>"><?=$formation_lastPublished['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>

            <!-- FORMATION DE PROGRAMMATION -->
            <div class="container--courses-programation">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Programmation</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        extract($formationProgrammation);
                        foreach ($formationProgrammation as $programmation): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$programmation['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$programmation['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$programmation['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$programmation['id_course']?>"><?=$programmation['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>

            <!-- FORMATION DE DEVELOPPEMENT WEB -->
            <div class="container--courses-programation">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Développement web</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationDevWeb  as $DeveloppementWeb): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$DeveloppementWeb['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$DeveloppementWeb['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$DeveloppementWeb['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$DeveloppementWeb['id_course']?>"><?=$DeveloppementWeb['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>

            <!-- FORMATION DE BASE DE DONNEES -->
            <div class="container--courses-dataBase">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Base de données</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationDataBase  as $DataBase): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$DataBase['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$DataBase['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$DataBase['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$DataBase['id_course']?>"><?=$DataBase['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>

            <!-- FORMATION DE DEVELOPPEMENT PERSONNEL -->
            <div class="container--courses-devPersonnel">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Développement personnel</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationDevPersonnel  as $DevPersonnel): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$DevPersonnel['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$DevPersonnel['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$DevPersonnel['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$DevPersonnel['id_course']?>"><?=$DevPersonnel['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>


            <!-- FORMATION D'INTELLIGENCE ARTIFICIELLE -->
            <div class="container--courses-Ai">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Intelligence artificielle</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationAi  as $Ai): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$Ai['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$Ai['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$Ai['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$Ai['id_course']?>"><?=$Ai['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>

            <!-- FORMATION D'E-COMMERCE -->
            <div class="container--courses-Ecommence">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>E-commerce</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationECommerce as $Ecommerce): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$Ecommerce['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$Ecommerce['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$Ecommerce['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$Ecommerce['id_course']?>"><?=$Ecommerce['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>

            <!-- FORMATION DE DEVELOPPEMENT WEB -->
            <div class="container--courses-programation">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Entrepreneuriat</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationEntrepreneuriat as $Entrepreneuriat): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$Entrepreneuriat['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$Entrepreneuriat['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$Entrepreneuriat['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$Entrepreneuriat['id_course']?>"><?=$Entrepreneuriat['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                        
                </div>
            </div>

            <!-- FORMATION DE MARKETING DIGITAL-->
            <div class="container--courses-markentigDigital">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Marketing digital</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group last courses -->
                <div class="group-courses">
                    <?php 
                        foreach ($FormationMarkingDigital as $MarketingDigital): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$MarketingDigital['miniature']?>)'>
                                <a href="subscriber/<?=$InfoEtudiant['keyAccount']?>/<?=$MarketingDigital['id_course']?>" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$MarketingDigital['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href=""><?=$MarketingDigital['titre']?></a></h2>
                                </div>
                                <div class="course--block-icons">
                                    <div class="block--icon"><span><i class="far fa-user"></i></span>25</div>
                                    <div class="block--icon"><span><i class="far fa-eye"></i></span>254</div>
                                    <div class="block--auhtor">
                                        <img src="thumb/m/images/noah.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                        
                </div>
            </div>

        </div>
    </div>

    <!-- CONTAINER-LEARNING ILLUSTRATION -->
    <div class="container-learningIllustration">
        <div class="content-text-learnIllustration">
            <h1>Faire savoir l'utilisation</h1>
            <p>Vous devez savoir juste une choses, vous pouvez apprendre n'importe quoi. n'importe quand, n'importe ou pour vous faire decouvrir vous-même. Notre contenu vous aidera a chaque étape de votre apprentissage n'importe quand, n'importe ou pour vous découvrir vous-même.</p>

            <div class="group-illustion-icons">
                <div class="group--icons">
                    <span class="icon"><i class="fas fa-shield-alt"></i></span>
                    <span>Sérvice sûr & sécurisé et chaque étape du processus</span>
                </div>
                <div class="group--icons">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <span>Sécurisé le processus de maintien à chaque étape</span>
                </div>
                <div class="group--icons">
                    <span class="icon"><i class="far fa-calendar-check"></i></span>
                    <span>Il est sans risque de s'inscire à un cours sur les découvertes </span>
                </div>
                <div class="group--icons">
                    <span class="icon"><i class="far fa-calendar-alt"></i></span>
                    <span>Nos contenus vous aidéra à chaque étape</span>
                </div>
            </div>
            <div class="group-button">
                <button>Voir plus</button>
            </div>
            <div class="learningIllustration-vignette">
                <div class="group-vignette">
                    <span><i class="fas fa-shield-alt"></i></span>
                </div>
                <h4>100% Sûr & Sécurisé</h4>
                <p>Contruissez un avenir, Contruissez une marque, Contruissez un business. Voici ce que l'enseignable</p>
            </div>
        </div>
        <div class="content-image-learnIllustration">
            <!-- <img src="assets/images/utilisation.jpg" alt=""> -->
        </div>
    </div>

    <!-- CONTAINER ASIDE LEARNING ILLUSTRATION -->
    <div class="container-aside-learningIllusration">
        <div class="container-joinUs">
            <h1>Vous êtes formateur en ligne ?</h1>
            <button>Rejoignez-nous</button>
        </div>
    </div> 
    
        <!-- CONTAINER FOOTER -->
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
</body>
</html>