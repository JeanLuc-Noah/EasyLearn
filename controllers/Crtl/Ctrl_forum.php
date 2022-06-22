<?php
session_start();

require_once("Ctrl_Utilisateurs.php");
require_once("../../models/DBconnection.php");
require_once('../../models/Etudiants.php');
require_once("../../models/Forum.php");

class Ctrl_Forum{
    private $success;
    private $msg;
    private $result;
    private $error_session;

    //Proprie des donnees du formulaire
    private $titre;
    private $categorie;
    private $contenus;
    private $dateH_publier;

    public function topic(){

        $Ctrl_Utilisateur = new Ctrl_Utilisateurs;
        $infoEtudiant = $Ctrl_Utilisateur->paramatres_session();

        $this->titre = htmlspecialchars($_POST["titre"]);
        $this->categorie = htmlspecialchars($_POST["categorie"]);
        $this->contenus = html_entity_decode($_POST["contenus"]);

        //Propriete de succes
        $this->success = 0;  
        $heure =  date("H") + 2 .":" .date("i");
        $this->dateH_publier = date("d M Y"). " / " .$heure;
        
        //Si les champs sont differents des vides
        if(!empty($this->titre AND $this->categorie AND $this->contenus)){
            if(mb_strlen($this->titre) <= 255){

                $ajouter_sujet = $Ctrl_Utilisateur->nouveau_topic($infoEtudiant["id_etudiant"], $this->titre, $this->categorie, $this->contenus, $this->dateH_publier);
                
               if($ajouter_sujet == true){
                   $this->success  = 1;
               }
               else{
                   $this->msg= "Le sujet existe déja sur le forum";
               }
            }
            else{
                $this->msg="Votre titre ne doit pas dépasser 255 caractères";
            }
        }
        else{
            $this->msg = "Veuillez renseigner tous les champs";
        }

        //resultat
        $this->result = ["success"=> $this->success, "msg"=>$this->msg];
        echo json_encode($this->result);
    }
}
$Ctrl_Forum = new Ctrl_Forum;
$Ctrl_Forum->topic();

?>