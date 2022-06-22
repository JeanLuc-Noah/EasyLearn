<?php

class Formations extends DBconnection{

    //Les attributs de la classe 
    private $idFormation;
    private $titre;
    private $sous_titre;
    private $description;
    private $status = 1;
    private $limit;
    private $categorie;
    private $nbr_heure;
    private $miniature;
    private $id_enseignant;

    public function __construct()
    {
        $this->getConnection();
    }
    /**
     * Toutes les methodes
     */
    public function setIdFormation($idFormation){
        $this->idFormation = $idFormation;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function setSous_titre($sous_titre){
        $this->sous_titre = $sous_titre;
    }
    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function Setnbr_heure($nbr_heure){
        $this->nbr_heure = $nbr_heure;
    }
    public function setMiniature($miniature){
        $this->miniature = $miniature;
    }
    public function setID_enseignant($id_enseignant){
        $this->id_enseignant = $id_enseignant;
    }

    public function getDernierFormations_Published($limit){
        $reqFormations = $this->_connexion->query("SELECT * FROM couses ORDER BY id_course DESC LIMIT ".$limit);
        return $reqFormations->fetchAll();
    }
    public function getFormationsCategorie(){
        $reqCoursesCategorie = $this->_connexion->prepare("SELECT * FROM couses WHERE categorie= ? ORDER BY id_course DESC LIMIT 4");
        $reqCoursesCategorie->execute(array($this->categorie));
        return $reqCoursesCategorie->fetchAll();
    }
    public function getFormationsParId(){
        $reqFormationsParId = $this->_connexion->prepare("SELECT * FROM couses WHERE  id_course = ?");
        $reqFormationsParId->execute(array($this->idFormation));
        return $reqFormationsParId->fetch();
    }
    public function getModule_cours(){
        $reqModule = $this->_connexion->prepare("SELECT * FROM module_courses WHERE id_course = ?");
        $reqModule->execute(array($this->idFormation));
        return $reqModule->fetch();
    }
    public function insert_formation(){
        $insert_formation = $this->_connexion->prepare("INSERT INTO couses(titre, sous_titre, categorie, description, heure, miniature, status, id_enseignant) VALUES(?,?,?,?,?,?,?,?)");
        $insert_formation->execute(array($this->titre, $this->sous_titre, $this->categorie, $this->description, $this->nbr_heure, $this->miniature, $this->status, $this->id_enseignant));

        if($insert_formation){
            return true;
        }
    }
    public function selected_title(){
        $reqTitle = $this->_connexion->prepare("SELECT * FROM couses WHERE titre = ?");
        $reqTitle->execute(array($this->titre));
        $titleExist = $reqTitle->rowCount();
        
        if($titleExist > 0){
            return $reqTitle->fetch();
        }
        else{
            return false;
        }
        
    }
    public function allCourses_enseignant(){
        $reqCourses_enseignant = $this->_connexion->prepare("SELECT * FROM couses WHERE id_enseignant = ?");
        $reqCourses_enseignant->execute(array($this->id_enseignant));

        return $reqCourses_enseignant->fetchAll();
    }
    public function deleteFormation(){
        $deleteFormation = $this->_connexion->prepare("DELETE FROM couses WHERE id_course = ?");
        $deleteFormation->execute(array($this->idFormation));

        if($deleteFormation){
            return true;
        }
        else{
            return false;
        }
    }
    public function updateFormation(){
        $updateFormation = $this->_connexion->prepare("UPDATE couses SET titre = ?, sous_titre = ?, categorie = ?, description = ?, heure = ? WHERE id_course = ?");
        $updateFormation->execute(array($this->titre, $this->sous_titre, $this->categorie, $this->description, $this->nbr_heure, $this->idFormation));

        if($updateFormation){
            return true;
        }
    }
}

?>