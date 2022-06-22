<?php
class Formation_cursus extends DBconnection{
  
    private $id_formationCursus;
    private $id_cursus;
    private $titre;
    private $sous_titre;
    private $description;
    private $credit;

    public function __construct()
    {
        $this->getConnection();
    }
    public function setId_cursus($id_cursus){
        $this->id_cursus = $id_cursus;
    }
    public function select_formationCursus(){
       $reqFormation_cursus = $this->_connexion->prepare("SELECT * FROM formations_cursus WHERE id_cursus= ?");
       $reqFormation_cursus->execute(array($this->id_cursus));
       return $reqFormation_cursus->fetchAll();
    }
}


?>