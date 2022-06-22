<?php
require_once("Ctrl_Utilisateurs.php");
require_once("../../models/DBconnection.php");
require_once("../../models/Formations.php");

class Ctrl_Delete{
    private $id_formation;
    private  $success;
    private $msg;
    private $resultat;

    public function __construct()
    {   
        $this->success = 0;

        $this->id_formation = $_POST["id_formation"];

        if(isset($_POST["id_formation"]) AND !empty($_POST["id_formation"])){
           
            $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
            $supprimer_formation = $Ctrl_Utilisateurs->supprimer_formation($this->id_formation);
            
            if($supprimer_formation == true){
                $this->success = 1;
                $this->msg = "La formation à été supprimer.";
            }
            else{
                $this->msg ="Une erreur est survenue...";
            }

        } 
        $this->resultat = ["success"=> $this->success, "msg"=> $this->msg];
        echo json_encode($this->resultat);
    }
}
$Ctrl_Delete = new Ctrl_Delete;




?>