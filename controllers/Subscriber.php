<?php

class Subscriber{
   public function __construct()
   {
       /**
        * Appelle a la methode sessionExistAndParamsGet
        * Qui verifier l'existance de la session et de paramtre GET
        * Appelle a la methode formationParamsID et 
        */
        $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
        $InfoEtudiant = $Ctrl_Utilisateurs->sessionExistAndParamsGet();
        $formationParamsID = $Ctrl_Utilisateurs->formationParamsID();

        if($formationParamsID != null){
            $formationDejaInscrit = $Ctrl_Utilisateurs->formationDejaInscrit($formationParamsID['id_course'],$InfoEtudiant['id_etudiant']);
            $date = date("d/m/Y");
            $idEtudiant =$InfoEtudiant['id_etudiant'];
            $idFormation = $formationParamsID['id_course'];
            $module_formation = $Ctrl_Utilisateurs->module_cours($idFormation);

            if(isset($_POST['inscription'])){
                $souscriptionFormation = $Ctrl_Utilisateurs->souscriptionFormation($idEtudiant,$idFormation,$date);
                if($souscriptionFormation){
                    header("location:../../dashboard/".$InfoEtudiant['keyAccount']);
                }
            }
            /**
             * Chargement de la vue
             */
            require_once("views/subscriber.view.php");
        }
        else{
            header("location:../../courses/".$InfoEtudiant['keyAccount']);
        }
        
   } 
}

?>