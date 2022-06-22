<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les dernières discusions | <?=WEBSITE_NAME?></title>
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
                    <li><a href="#">|</a></li>
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

    <!-- MAIN PRINCIPAL  -->
    <div class="container-main reveal">

        <!-- CONTAINER TITRE -->
        <div class="container-title">
            <div class="content--title">
                <h2>Les dernières <span>discussions</span></h2>
                <p>Forum de discussions, de débats, d'entraide. Bienvenue sur l'un des plus grands espaces de discussion.
                        <br/>Ici convergent des dizaines de milliers de personnes, de tous les âges, tous les milieux, pour débattre, discuter, se cultiver, partager leurs connaissances et s'entraider.</p>
            </div>
            <div class="content-button-newSujet">
                <a href="forum/newTopic"><i class="fas fa-plus"></i>&nbsp;Posez votre question</a>
            </div>
        </div>                 

        <div class="container--contents">

            <div class="group-content">
                <div class="section-primaire">
                    <a href="">10 octobre 2021 - Jean-Luc Noah</a>
                </div>
                
                <div class="section-secondaire">

                    <div class="group-discusion">

                        <div class="block-sujet">
                            <a href="">Structure de contrôle</a>
                            <span class="separator"><i class="fas fa-chevron-right"></i></span>&nbsp;
                            <a href="">Programmation</a>
                        </div>

                        <div class="block-message">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta illo quos nesciunt? Consectetur dignissimos voluptas, porro, pariatur est maiores ut incidunt a doloremque aperiam sunt magnam nemo nisi quae totam accusantium officiis, enim facilis eveniet eligendi minus in sint voluptatem debitis?  dolore inventore est recusandae sed accusamus, error aliquam? Ab neque fugit perspiciatis a, laudantium ad ipsa error eius voluptatibus quae inventore excepturi, amet ipsam magni officia quis omnis eaque sunt officiis, earum repellat totam accusamus commodi. Assumenda cupiditate rerum qui veritatis, est maiores dignissimos quibusdam at?</p>
                            <span class="overlay"></span>
                        </div>

                        <!-- GROUP DE REPONSE -->
                        <div class="group-reponse">
                            <a href=""class="icon-message"><i class="far fa-comment-dots"></i></a>
                            <a href="" class="reponse-messag">0 réponse</a>
                        </div>

                    </div>

                    <div class="group-detaille">
                        <a href="">Plus de détail
                        &nbsp; <span class="separator"><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>

            
            <div class="group-content">
                <div class="section-primaire">
                    <a href="">10 octobre 2021 - Jean-Luc Noah</a>
                </div>
                
                <div class="section-secondaire">

                    <div class="group-discusion">

                        <div class="block-sujet">
                            <a href="">Tu veux reussir les etudes ?</a>
                            <span class="separator"><i class="fas fa-chevron-right"></i></span>&nbsp;
                            <a href="">Développement personnel</a>
                        </div>

                        <div class="block-message">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta illo quos nesciunt? Consectetur dignissimos voluptas, porro, pariatur est maiores ut incidunt a doloremque aperiam sunt magnam nemo nisi quae totam accusantium officiis, enim facilis eveniet eligendi minus in sint voluptatem debitis?  dolore inventore est recusandae sed accusamus, error aliquam? Ab neque fugit perspiciatis a, laudantium ad ipsa error eius voluptatibus quae inventore excepturi, amet ipsam magni officia quis omnis eaque sunt officiis, earum repellat totam accusamus commodi. Assumenda cupiditate rerum qui veritatis, est maiores dignissimos quibusdam at?</p>
                            <span class="overlay"></span>
                        </div>

                        <!-- GROUP DE REPONSE -->
                        <div class="group-reponse">
                            <a href=""class="icon-message"><i class="far fa-comment-dots"></i></a>
                            <a href="" class="reponse-messag">0 réponse</a>
                        </div>

                    </div>

                    <div class="group-detaille">
                        <a href="">Plus de détail
                        &nbsp; <span class="separator"><i class="fas fa-chevron-right"></i></span></a>
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
</body>
</html>