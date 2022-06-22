<?php
class Enseignants extends DBconnection {

    /**
     * Propriete de l'entite enseignant
     */
    private $id_enseignant;
    private $nom;
    private $prenom;
    private $age;
    private $genre;
    private $email;
    private $password;
    private $keyAccount;

    public function __construct()
    {
        $this->getConnection();
    }

    /**
     * Les getters et setters
     */
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
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
        $this->password =$password;
    }
    public function setKeyAccount($keyAccount){
        $this->keyAccount = $keyAccount;
    }

    public function getInscription(){
        $insert_enseignant = $this->_connexion->prepare("INSERT INTO enseignants(nom, prenom, age, sexe, email, password, keyAccount) VALUES(?,?,?,?,?,?,?)");
        $insert_enseignant->execute(array($this->nom, $this->prenom, $this->age, $this->genre, $this->email, $this->password, $this->keyAccount));
        
        if($insert_enseignant){
            return true;
        }
        else{
            return false;
        }

    }
    public function selected_email(){
        $reqEmail = $this->_connexion->prepare("SELECT * FROM enseignants WHERE email = ?");
        $reqEmail->execute(array($this->email));
        $emailExist = $reqEmail->rowCount();

        if($emailExist == 1){
            return $reqEmail->fetch();
        }
        else{
            return false;
        }
    }
    public function selectedKeyAccount(){
        $reqKeyAccount = $this->_connexion->prepare("SELECT * FROM enseignants WHERE keyAccount = ?");
        $reqKeyAccount->execute(array($this->keyAccount));
        return $reqKeyAccount->fetch();
    }
}


?>