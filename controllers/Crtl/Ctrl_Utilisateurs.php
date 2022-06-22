<?php
class Ctrl_Utilisateurs{
    
    private $categorieFormation;

    //Methode des cookies
    public function CookiesExist(){
        if(isset($_COOKIE['email'], $_COOKIE['password']) AND !empty($_COOKIE['email']) AND !empty($_COOKIE['password'])){
            
        }
    }
    //Methode d'existance de la session
    public function sessionExistAndParamsGet(){
        $urlParams = explode("/",$_GET['url']);

        if(isset($urlParams) AND !empty($urlParams[1])){
            $keyAccount = htmlspecialchars($urlParams[1]);

            //Appelle a de la methode selectedKeyAccount de l'objet courant
            $InformationsEtudiant = $this->selectedKeyAccountEtudiant($keyAccount);
            if(isset($_SESSION['user']) AND !empty($_SESSION['user']['keyAccount']) AND $InformationsEtudiant['keyAccount'] == $_SESSION['user']['keyAccount']){
                return $InformationsEtudiant;
            }
            else{
                header("location:../login");
            }
        }
        else{
            header("location:../login");
        }

        return $urlParams;

    }
    public function sessionGet_enseignant(){

        $urlParams = explode("/",$_GET['url']);
        $keyAccount = htmlspecialchars($urlParams[1]);

        if(isset($urlParams) AND !empty($urlParams[1])){
            $keyAccount = htmlspecialchars($urlParams[1]);

            //Appelle a de la methode selectedKeyAccount de l'objet courant
            $InformationsEnseignant = $this->selectedKeyAccountEnseignant($keyAccount);

            if(isset($_SESSION['enseignant']) AND !empty($_SESSION['enseignant']['keyAccount']) AND $InformationsEnseignant['keyAccount'] == $_SESSION['enseignant']['keyAccount']){
                return $InformationsEnseignant;
            }
            else{
                header("location:../login");
            }
        }
        else{
            header("location:../login");
        }

    }
    public function paramatres_session(){
        
        $InformationsEtudiant = $this->selectedKeyAccountEtudiant($_SESSION["user"]["keyAccount"]);

        //Si la session exist
        //Elle est differente de vide
        if(isset($_SESSION['user']) AND !empty($_SESSION['user']['keyAccount']) AND $InformationsEtudiant['keyAccount'] == $_SESSION['user']['keyAccount']){
            return $InformationsEtudiant;
        }
        else{
            header("location:login");
        }

    }
    public function paramatresSession_enseignant(){
        if(isset($_SESSION['enseignant']) AND !empty($_SESSION['enseignant']['keyAccount'])){

            $keyAccount = $_SESSION['enseignant']['keyAccount']; 
            $InformationsEnseignant = $this->selectedKeyAccountEnseignant($keyAccount);
            return $InformationsEnseignant;
        }
        else{
            header("location:../login");
        }
        
    }
    
    //Methode d'auhentification de l'etudiant
    public function Seconnecter($email){
        $Etudiant = new Etudiants;
        $Etudiant->setEmail($email);
        $coordonnees =  $Etudiant->getAuthentification();

        return $coordonnees;
    }
    public function SeConnecter_enseignant($email){
        $Enseignants = new Enseignants;
        $Enseignants->setEmail($email);
        $coordonnees_enseignant = $Enseignants->selected_email();

        return $coordonnees_enseignant;
    }
    //Methode des cours de cursus
    public function formation_cursus($idEtudiant){
        $Etudiant = new Etudiants;
        $Etudiant->setIdEtudiant($idEtudiant);
        $formation_cursus = $Etudiant->selected_cursusEtudiant();

        if($formation_cursus != null){
            $formationDe_cursus = $this->selected_formationCursus($formation_cursus['id_cursus']);
            return $formationDe_cursus;
        }
        else{
            return false;
        }
    }
    public function selected_formationCursus($idCursus){
        $Formation_cursus = new Formation_cursus;
        $Formation_cursus->setId_cursus($idCursus);
        $formation_in_cursus = $Formation_cursus->select_formationCursus();

        return $formation_in_cursus;
    }

    //Methode d'inscription de l'etudiant
    public function inscriptionEtudiant($firstName, $lastName, $age, $genre, $email, $password, $keyAccount){
        $Etudiants = new Etudiants;
        $Etudiants->setEmail($email);
        $emailEtudiant = $Etudiants->selectedEmail();

        if($emailEtudiant == null){
            $Etudiants->setFirst_name($firstName);
            $Etudiants->setLast_name($lastName);
            $Etudiants->setAge($age);
            $Etudiants->setGenre($genre);
            $Etudiants->setPassword($password);
            $Etudiants->setKeyAccount($keyAccount);
            $Etudiants->inscrireEtudiant();
        }
        else{
            return true;
        }

        return $emailEtudiant;

    }
    //Récuperation des données par clé du compte etudiant
    public function selectedKeyAccountEtudiant($keyAccount){
        $Etudiants = new Etudiants;
        $Etudiants->setKeyAccount($keyAccount);
        $keyEtudiant = $Etudiants->selectedKeyAccount();
        return $keyEtudiant;
    }

    public function selectedKeyAccountEnseignant($keyAccount){
        $Enseignants = new Enseignants;
        $Enseignants->setKeyAccount($keyAccount);
        $keyEnseignant = $Enseignants->selectedKeyAccount();

        return $keyEnseignant;
    }

    //Récuparation de l'ID de formation en parametre
    //Verification de l'existance de la formation
    public function formationParamsID(){
        $urlParams = explode("/", $_GET['url']);
        if(isset($urlParams[2]) AND !empty($urlParams[2])){
            $idFormation = intval($urlParams[2]);

            $FormationParID = $this->formationsParID($idFormation);
            if($FormationParID != null){
                return $FormationParID;
            }
            else{
                return false;
            }
        }
    }
    //Verification si l'etudiant a deja souscrit la formation
    public function formationDejaInscrit($idFormation,$idEtudiant){
        $Etudiant = new Etudiants;
        $Etudiant->setIdEtudiant($idEtudiant);
        $resultInscrit  = $Etudiant->selected_idFormation_idEtudiant($idFormation);
        
        return $resultInscrit;
    }
    //Souscription de la formation
    public function souscriptionFormation($idEtudiant,$idFormation,$date){
        $Etudiant = new Etudiants;
        $Etudiant->setIdEtudiant($idEtudiant);
        $insertSouscription = $Etudiant->souscire_formation($idFormation,$date);
        return $insertSouscription;
    }
    //Formation souscrit par l'etudiant
    public function formationSouscrit($idEtudiant){
        $Etudiants = new Etudiants;
        $Etudiants->setIdEtudiant($idEtudiant);
        $formationsSouscrit = $Etudiants->selectedFormationsSouscrit();

        return $formationsSouscrit;
    }

    //Recuperation des formations par id
    public function formationsParID($idFormation){
        $Formations = new Formations;
        $Formations->setIdFormation($idFormation);
        $FormationParID = $Formations->getFormationsParId();

        return $FormationParID;
    }
    public function update_courses($titre, $sous_titre, $categorie, $description, $heure, $idFormation){
        $Formations = new Formations;
        $Formations->setTitre($titre);
        $Formations->setSous_titre($sous_titre);
        $Formations->setCategorie($categorie);
        $Formations->setDescription($description);
        $Formations->Setnbr_heure($heure);
        $Formations->setIdFormation($idFormation);

        $modifier = $Formations->updateFormation();

        if($modifier == true){
            return true;
        }
    }
    
    //Derniers formations publiers
    public function DerniersFormationPublier($limit){
        $Formations = new Formations;
        $DerniersFormationsPublier=  $Formations->getDernierFormations_Published($limit);
        return ($DerniersFormationsPublier);
    }
    
    //Formation par categorie
    public function FormationsParCategorie($categorieFormation){
        $Formations = new Formations;
        $Formations->setCategorie($categorieFormation);
        $categorieFormations =  $Formations->getFormationsCategorie();

        return $categorieFormations;
        
    }
    public function publier_formation($titre,$sous_titre, $categorie, $description, $heure, $miniature, $id_enseigant){
        $Formations = new Formations;
        $Formations->setTitre($titre);
        $Formations->setSous_titre($sous_titre);
        $Formations->setCategorie($categorie);
        $Formations->setDescription($description);
        $Formations->Setnbr_heure($heure);
        $Formations->setMiniature($miniature);
        $Formations->setID_enseignant($id_enseigant);

        $formationExist = $Formations->selected_title();

        if($formationExist == false){

            $publier_formation = $Formations->insert_formation();

            if($publier_formation == true){
                return false;
            }
        }
        else{
            return true;
        }
    }
    public function nouveau_topic($idEtudiant, $titre, $categorie, $contenus, $dateH_publier){
        $Forum = new Forum;
        $Forum->setId_etudiant($idEtudiant);
        $Forum->setTitre($titre);
        $Forum->setCategorie($categorie);
        $Forum->setContenus($contenus);
        $Forum->setDateH_publier($dateH_publier);

        $sujet_exist = $Forum->sujet_exist();

        //Le sujet existe
        if($sujet_exist != null){
            return false;
        }
        else{
            $ajouter_sujet = $Forum->ajouter_sujet();

            //Si l'insertion a bien marche
            if($ajouter_sujet == true){
                return true;
            }
        }
    }
    public function insertEnseignant($lastName, $firstName, $age, $genre, $email, $password, $keyAccount){
        $Enseignants = new Enseignants;
        $Enseignants->setNom($lastName);
        $Enseignants->setPrenom($firstName);
        $Enseignants->setAge($age);
        $Enseignants->setGenre($genre);
        $Enseignants->setEmail($email);
        $Enseignants->setPassword($password);
        $Enseignants->setKeyAccount($keyAccount);

        $emailExist = $Enseignants->selected_email();

        if($emailExist == false){
            $creer_compte = $Enseignants->getInscription();

            if($creer_compte == true){
                return false;
            }
        }
        else{
            return true;
        }

    }
    public function module_cours($idFormation){
        $Formation  = new Formations;
        $Formation->setIdFormation($idFormation);
        $module_formation = $Formation->getModule_cours();

        return $module_formation;
    }
    public function formations_enseignant($id_enseignant){
        $Formations = new Formations;
        $Formations->setID_enseignant($id_enseignant);
        $allFormations_enseignant = $Formations->allCourses_enseignant();

        return $allFormations_enseignant;
    }
    public function supprimer_formation($idFormation){
        $Formations = new Formations;
        $Formations->setIdFormation($idFormation);
        $supprimer = $Formations->deleteFormation();

        if($supprimer == true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
