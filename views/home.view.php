<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | <?=WEBSITE_NAME?></title>
    <meta name="descrition" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/dashboard">
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
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
                <li><a class="active" href="">Accueil</a></li>
                <li><a href="forum">Forum</a></li>
                <li><a href="courses">Cours</a></li>
                <li><a href="company">A propos</a></li>
            </ul>
        </nav>

        <!----------- CONTAINER LOGIN ------------>
        <div class="container-login">
            <div class="container--login"><a href="register">Inscription</a></div>
            <div class="container--login"><a href="login">Connexion</a></div>
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

    <!-------- CONTAINER COURSES ---------->
    <div class="container-courses">
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
                        extract($DerniersFormationsPubliers);
                        foreach ($DerniersFormationsPubliers as $formation_lastPublished): 
                    ?>
                        <div class="course">
                            <div class="course--miniature" style='background-image:url(thumb/images/<?=$formation_lastPublished['miniature']?>)'>
                                <a href="" ></a>
                            </div>
                            <div class="course--Infosupplemetaire">
                                <div class="course--categorie">
                                    <?=$formation_lastPublished['categorie']?>
                                </div>
                                <div class="course--titre">
                                    <h2><a href=""><?=$formation_lastPublished['titre']?></a></h2>
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

            <!-- COURS SELON LA CATEGORIE -->
            <div class="container--courses-categories">
                <!-- group-title-courses -->
                <div class="group-title-course">
                    <h2>Développement web</h2>
                    <h3><a href="">Voir</a></h3>
                </div>

                <!-- group the courses in categories-->
                <div class="group-courses">
                    <?php 
                        
                        foreach ($FormationParCategorie as $formation_developpement): 
                    ?>

                    <div class="course">
                        <div class="course--miniature" style='background-image:url(thumb/images/<?=$formation_developpement['miniature']?>)'>
                            <a href="" ></a>
                        </div>
                        <div class="course--Infosupplemetaire">
                            <div class="course--categorie">
                                <?=$formation_developpement['categorie']?>
                            </div>
                            <div class="course--titre">
                                <h2><a href=""><?=$formation_developpement['titre']?></a></h2>
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
