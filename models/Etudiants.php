<?php

class Etudiants extends DBconnection{

    private $idEtudiant;
    private $first_name;
    private $last_name;
    private $email;
    private $age;
    private $genre;
    private $password;
    private $keyAccount;

    public function __construct()
    {
        $this->getConnection();
    }

    /**
     * Les gettets et
     * Les Setters
     */
    public function setIdEtudiant($idEtudiant){
        $this->idEtudiant = $idEtudiant;
    }
    public function setFirst_name($first_name){
        $this->first_name = $first_name;
    }
    public function setLast_name($last_name){
        $this->last_name = $last_name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setKeyAccount($keyAccount){
        $this->keyAccount = $keyAccount;
    }


    /**
     * Toutes les methodes
     */
    public function getAuthentification(){
        $reqEtudiants = $this->_connexion->prepare("SELECT * FROM etudiants WHERE email = ?");
        $reqEtudiants->execute(array($this->email));
        return $reqEtudiants->fetch();
    }
    //Recuperation des formations de cursus
    public function selected_cursusEtudiant(){
        $reqCursus_formation = $this->_connexion->prepare("SELECT * FROM cursus WHERE id_etudiant = ?");
        $reqCursus_formation->execute(array($this->idEtudiant));
        return $reqCursus_formation->fetch();
    }

    //Recuperation des données par la clé du compte
    public function selectedKeyAccount(){
        $reqKeyAccount = $this->_connexion->prepare("SELECT * FROM etudiants WHERE keyAccount = ?");
        $reqKeyAccount->execute(array($this->keyAccount));
        return $reqKeyAccount->fetch();
    }
    //Souscrire formation
    public function souscire_formation($idFormation,$date){
        $souscription = $this->_connexion->prepare("INSERT INTO suscriber_courses(id_user, id_course, date_suscriber) VALUE(?,?,?)");
        $souscription->execute(array($this->idEtudiant,$idFormation,$date));
        return $souscription;
    }
    //Recuperation l'id_formation et id_etudiant
    public function selected_idFormation_idEtudiant($idFormation){
        $reqEtudiant = $this->_connexion->prepare("SELECT * FROM suscriber_courses WHERE id_course = ? AND id_user = ?");
        $reqEtudiant->execute(array($idFormation,$this->idEtudiant));
        return $reqEtudiant->fetch();
    }
    //Récupereation des formations déja souscrit
    public function selectedFormationsSouscrit(){
        $reqFormationSouscrit = $this->_connexion->prepare("SELECT * FROM suscriber_courses WHERE id_user = ?");
        $reqFormationSouscrit->execute(array($this->idEtudiant));
        return $reqFormationSouscrit->fetchAll();
    }
    //Recuperationde l'adresse email
    public function selectedEmail(){
        $reqEmail = $this->_connexion->prepare("SELECT * FROM etudiants WHERE email=?");
        $reqEmail->execute(array($this->email));
        return $reqEmail->fetch();
    }
    //Inscription d'un etudiant
    public function inscrireEtudiant(){
        $insertEtudiant = $this->_connexion->prepare("INSERT INTO etudiants(nom, prenom, age, genre,email, password, keyAccount) VALUE(?,?,?,?,?,?,?)");
        $insertEtudiant->execute(array($this->first_name, $this->last_name, $this->age, $this->genre, $this->email, $this->password, $this->keyAccount));

        if($insertEtudiant){
            return true;
        }
        else{
            return false;
        }
    }
    
}


?>