<?php
class Forum extends DBconnection{

    private $id_sujet;
    private $id_etudiant;
    private $titre;
    private $categorie;
    private  $contenus;
    private $dateH_publier;

    public function __construct()
    {
        $this->getConnection();
    }

    /**
     * Les getters et setters
     */
    public function setTitre($titre){
        $this->titre= $titre;
    }
    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }
    public function setContenus($contenus){
        $this->contenus = $contenus;
    }
    public function setId_etudiant($id_etudiant){
        $this->id_etudiant = $id_etudiant;
    }
    public function setDateH_publier($dateH_publier){
        $this->dateH_publier = $dateH_publier;
    }
    public function ajouter_sujet(){
        $insert_sujet = $this->_connexion->prepare("INSERT INTO forums(id_etudiant, titre, categorie, contenus, dateH_publier) VALUES(?,?,?,?,?)");
        $insert_sujet->execute(array($this->id_etudiant, $this->titre, $this->categorie, $this->contenus, $this->dateH_publier));

        if($insert_sujet == true){
            return true;
        }
    }
    public function sujet_exist(){
        $reqSujet = $this->_connexion->prepare("SELECT * FROM forums WHERE titre = ?");
        $reqSujet->execute(array($this->titre));
        $sujet_exist = $reqSujet->rowCount();
        
        if($sujet_exist ==1){
            return $reqSujet->fetch();
        }
        else{
            return false;
        }
    }
}

?>