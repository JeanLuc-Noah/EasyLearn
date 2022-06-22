<?php
class Dashboards{
    public function __construct()
    {
        $urlParams = explode("/", $_GET["url"]);
        $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
        $infoEnseignant = $Ctrl_Utilisateurs->paramatresSession_enseignant();
        
        $id_enseignant = $infoEnseignant["id_enseignant"];

        //Si le paramatre existe et le premier paramètre == editer
        if(isset($urlParams) AND $urlParams[1] == "Editer"){
            

            /**
             * Traitement du formulaire d'ajout
             */
            if(isset($_POST["validate"])){

                //Protection des données
                $titre = htmlspecialchars($_POST["titre"]);
                $sous_titre = htmlspecialchars($_POST["sous_titre"]);
                $categorie = htmlspecialchars($_POST["categorie"]);
                $nbr_heure = htmlspecialchars($_POST["nbr_heure"]);
                $description = html_entity_decode($_POST["description"]);

                if(!empty($titre AND $sous_titre AND $categorie AND $nbr_heure AND $description)){
                    if(isset($_FILES["miniature"]) AND !empty($_FILES["miniature"]["name"])){
                        
                        $extensionValide = ["jpeg", "png", "jpg"];
                        $tailleMax = 5069797;
                        $miniature = $_FILES["miniature"]["name"];

                        $extensionUpload = strtolower(substr(strchr($miniature, "."), 1));

                        if($_FILES["miniature"]["size"] <= $tailleMax){
                            if(in_array($extensionUpload, $extensionValide)){

                                $upload_fichier = move_uploaded_file($_FILES["miniature"]["tmp_name"], "thumb/".$miniature);
                                if($upload_fichier){
                                    $ajouter_formation = $Ctrl_Utilisateurs->publier_formation($titre, $sous_titre, $categorie, $description, $nbr_heure, $miniature, $id_enseignant);
                                    
                                    if($ajouter_formation == true){
                                        $msg ="Cette formation existe déja";
                                    }
                                    else{
                                        $success ="La formation à été ajouter avec succès";
                                    }
                                }
                            }
                            else{
                                $msg ="Votre fichier doit être en format 'JPEG, JPG, PNG'";
                            }
                        }
                        else{
                            $msg = "Votre fichier ne doit pas dépasseé 5Mo";
                        }
                    }
                }
                else{
                    $msg = "Veuillez renseigner tous les champs";
                }
            }
            require_once("views/ajoutCours.view.php");
        }

        /**
         * Option de modification
         */
        elseif(isset($urlParams) AND $urlParams[1] == "Modifier" AND empty($urlParams[2])){
            $allFormation_enseignant = $Ctrl_Utilisateurs->formations_enseignant($infoEnseignant["id_enseignant"]);
            require_once("views/mofidiferCourses.view.php"); 
        }
        elseif(isset($urlParams) AND $urlParams[1] == "Modifier" AND !empty($urlParams[2])){
            
            $info_formation  = explode("-", $urlParams[2]);
            $id_formation = $info_formation[0];
            $formation = $Ctrl_Utilisateurs->formationsParID($id_formation);

            /**
             * Traitement du formulaire
             */
            if(isset($_POST["validate"])){

                //Protection des données
                $titre = htmlspecialchars($_POST["titre"]);
                $sous_titre = htmlspecialchars($_POST["sous_titre"]);
                $categorie = htmlspecialchars($_POST["categorie"]);
                $nbr_heure = htmlspecialchars($_POST["nbr_heure"]);
                $description = html_entity_decode($_POST["description"]);

                if(!empty($titre AND $sous_titre AND $categorie AND $nbr_heure AND $description)){
                    $modification = $Ctrl_Utilisateurs->update_courses($titre, $sous_titre, $categorie, $description, $nbr_heure,  $id_formation);
                    
                    if($modification == true){
                        header("location:../../dashboards/".$infoEnseignant["keyAccount"]);
                    }
                }
                else{
                    $msg = "Veuillez renseigner tous les champs";
                }
            }



            require_once("views/editerCourses.view.php"); 
        }

        /**
         * Option de suppresion
         */
        elseif(isset($urlParams) AND $urlParams[1] == "Supprimer"){
            $allFormation_enseignant = $Ctrl_Utilisateurs->formations_enseignant($infoEnseignant["id_enseignant"]);
            require_once("views/deleteCourses.view.php"); 
        }
        else{
            $infoEnseignant = $Ctrl_Utilisateurs->sessionGet_enseignant();
            $allFormation_enseignant = $Ctrl_Utilisateurs->formations_enseignant($infoEnseignant["id_enseignant"]);
            require_once("views/dashboardEnseignant.view.php");
        }
        
    }
}

?>