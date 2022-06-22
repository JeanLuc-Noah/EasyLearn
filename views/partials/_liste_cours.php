<div class="list-courses reveal tabs-content active" data-onglet="1">

    <div class="container--title-liste">
        <h2>Liste des cours publiés</h2>
    </div>

    <div class="container-liste-published">

        <div class="group-secondaryTitles">
            <div class="name-courses">Cours</div>
            <div class="date-courses">Nombre d'heure</div>
            <div class="certificat-courses">Status</div>
        </div>

        <div class="group-courses">
            <?php

            //Parcours le tableau des suscription de formation
            foreach ($allFormation_enseignant as $coursPublier) :
            ?>
            
            <div class="group--course">
                <div class="block-name">
                    <a href=""><?=$coursPublier['titre']?></a>
                </div>
                <div class="block-heure">
                    <?=$coursPublier["heure"]?>
                </div>
               
                <div class="block-status">
                    <?php

                        if($coursPublier["status"] == 0){
                            echo "<span><i class='far fa-eye-slash'></i></span>&nbsp; Non visible";
                        }
                        else{
                            echo "<span><i class='far fa-eye'></i></span>&nbsp; Visible";
                        }
                    ?>
                </div>
                
            </div>

            <?php endforeach ?>
        </div>
        
    </div>
</div>