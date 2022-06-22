<?php

class Home{
    public function __construct()
    {
        require_once("controllers/Crtl/Ctrl_Utilisateurs.php");
        $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
        $Ctrl_Utilisateurs->CookiesExist();
        $DerniersFormationsPubliers = $Ctrl_Utilisateurs->DerniersFormationPublier(4);
        $FormationParCategorie = $Ctrl_Utilisateurs->FormationsParCategorie("Developpement web");
        
        /**
         * Chargement de la vue
         */
        require_once("views/home.view.php");
    }
}

?>