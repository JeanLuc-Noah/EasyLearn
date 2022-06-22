<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer nouveau sujet | <?=WEBSITE_NAME?></title>
    <meta name="descrition" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:description" content="Commencez votre expérience de maintenant en souscrivant une ou plusieur formation, des milliers des cours mises à votre disposition sur <?=WEBSITE_NAME?>">
    <meta property="og:url" content="https://www.e-easyLearn/forum">
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
    <link rel="stylesheet" type="text/css" href="assets/css/forum.css">
</head>
<body>

    <!-- ENTETE DE LA PAGE  -->
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
                    <li><a  href="dashboard/<?=$InfoEtudiant['keyAccount']?>">Formations</a></li>
                    <li>|</a></li>
                    <li><a href="">Formation professionnel</a></li>
                    <li><a class="active" href="forum">Forum</a></li>
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



    </header>

    <div class="container-main reveal">

        <!-- CONTAINER TITRE -->
        <div class="container-title">
            <div class="content--title">
                <h2>Créer un <span>nouveau sujet</span></h2>
                <p>Vous pouvez publier maintenant un nouveau sujet</p>
            </div>
        </div>

        <div class="container--contents-formulaire">

            <div class="group-formulaire">
                <div class="container-msg" style="font-size: 14px; color:red"></div>

                <form method="" action="" class="group-form">

                    <div class="block-input">
                        <input type="text" name="titre" placeholder="Titre...">
                    </div>

                    <div class="block-input">
                        <select name="categorie" id="">
                            <option value="null">Choisir la catégorie...</option>
                            <option value="Programmation">Programmation</option>
                            <option value="Design">Design</option>
                            <option value="Sécuriter informatique">Sécuriter informatique</option>
                        </select>
                    </div>

                    <div class="block-textarea">
                        <textarea name="contenus" id="editor1" rows="10" cols="80" placeholder="Contenus du sujet...."></textarea>
                    </div>
                    <div class="block-validation">
                        <input type="submit" name="validateTopic" value="Valider">
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
                        <div class="text-regle">Rédiger les messages dans un langage clair sans abréviations.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-heart"></i></div>
                        <div class="text-regle">Faire usage de formule de politesse et échanger avec courtoisie.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-hands-helping"></i></div>
                        <div class="text-regle">Réserver un accueil cordial aux nouveaux utilisateurs.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-clock"></i></div>
                        <div class="text-regle">Poster son message dans le thème le plus approprié.</div>
                    </div>
                    <div class="block-regle">
                        <div class="icon-regle"><i class="fas fa-balance-scale"></i></div>
                        <div class="text-regle">Respecter la législation en vigueur.</div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- FOOTER  -->
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

    <script src="assets/plugin/ckeditor/ckeditor.js"></script>
    <script src="assets/plugin/ckeditor/init-ckedtor.js"></script>
</body>
</html>