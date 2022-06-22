<?php
class Dashboard{
    protected $views;

    public function __construct()
    {    
        /**
         * Appelle a la methode sessionExistAndGet 
        * Qui verifie les parametres passé en get et l'existance de la session
         */
        $Ctr_Utilisateurs = new Ctrl_Utilisateurs();
        $InfoEtudiant = $Ctr_Utilisateurs->sessionExistAndParamsGet();
        $formationSouscrit = $Ctr_Utilisateurs->formationSouscrit($InfoEtudiant['id_etudiant']);
        $lastFormationsPublished = $Ctr_Utilisateurs->DerniersFormationPublier(8);
        $formartion_cursus = $Ctr_Utilisateurs->formation_cursus($InfoEtudiant["id_etudiant"]);

        require_once("views/dashboard.view.php");

    }
}

?>