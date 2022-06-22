<?php
class Courses{
    public function __construct()
    {
        
        /**
         * Appelle a la methode sessionExistAndGet 
         * Qui verifie les parametres passé en get et l'existance de la session
         * 
         * Recuperation des formations par :
         * les derniers publiers
         * et par categorie
         */
        $Ctr_Utilisateurs = new Ctrl_Utilisateurs;
        $InfoEtudiant =  $Ctr_Utilisateurs->sessionExistAndParamsGet();
        $DerniersFormationsPublier = $Ctr_Utilisateurs->DerniersFormationPublier(4);
        $formationProgrammation = $Ctr_Utilisateurs->FormationsParCategorie("Programmation");
        $FormationDevWeb = $Ctr_Utilisateurs->FormationsParCategorie("Developpement web");
        $FormationDataBase = $Ctr_Utilisateurs->FormationsParCategorie("Base de donnees");
        $FormationDevPersonnel = $Ctr_Utilisateurs->FormationsParCategorie("Developpement personnel");
        $FormationAi = $Ctr_Utilisateurs->FormationsParCategorie("AI");
        $FormationECommerce = $Ctr_Utilisateurs->FormationsParCategorie("E-commerce");
        $FormationEntrepreneuriat = $Ctr_Utilisateurs->FormationsParCategorie("Entrepreneuriat");
        $FormationMarkingDigital = $Ctr_Utilisateurs->FormationsParCategorie("Marketing digital");

        
        /**
         * Chargment de la vue
         */
        require_once("views/courses.view.php");
    }
}





?>