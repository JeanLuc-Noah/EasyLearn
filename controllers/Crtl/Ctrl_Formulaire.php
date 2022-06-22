<?php
require_once("Ctrl_Utilisateurs.php");
require_once("../../models/DBconnection.php");
require_once('../../models/Etudiants.php');

class Ctrl_Register{
    private $success;
    private $msg;
    private $result;

    /**
     * Propriete d'insertion
     */
    private $username;
    private $last_name;
    private $email;
    private $password;
    private $identite;
    private $age;
    private $keyAccount;

    public function traitement_register(){
        $this->success = 0;

        /**
         * Traitement de formulaire d'inscription
         */
        if(!empty($_POST['username']) AND !empty($_POST["email"]) AND !empty($_POST["password"]) AND $_POST["identite"] != "identite" AND $_POST['age'] != 0){
           
            $this->username = htmlspecialchars($_POST['username']);
            $this->email = htmlspecialchars($_POST['email']);
            $this->password = htmlspecialchars($_POST['password']);
            $this->identite = htmlspecialchars($_POST['identite']);
            $this->age = intval($_POST['age']);

            if(mb_strlen($this->username) <= 255){

                if(mb_strlen($this->password) >= 6 ){

                 $this->password = password_hash(sha1($_POST["password"]),PASSWORD_DEFAULT);

                 if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){

                    $username = explode(" ", $this->username);
                    $firtName = $username[0];
                    $lastName = $username[1];

                    /**
                     * Generer la clé du compte
                     */
                    $chaine = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

                    for ($i=0; $i < 16; $i++) { 
                        $this->keyAccount .= $chaine[mt_rand(0, mb_strlen($chaine) -1)]; 
                    }

                    //Selection de l'adresse email
                    $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
                    $Etudiant_exist = $Ctrl_Utilisateurs->inscriptionEtudiant($firtName, $lastName, $this->age, $this->identite,$this->email, $this->password, $this->keyAccount);
                    
                    if($Etudiant_exist == true){
                        $this->msg= "Cette adresse email est déjà associée à un compte";
                    }
                    else{
                        $this->success = 1;
                        $this->msg = "Votre compte à bien été créer";
                    }
                 }
                 else{
                     $this->msg = "Adresse email saisie non valide";
                 }
                }
                else{
                    $this->msg= "Pour votre sécurité, veuillez renseigner un mot de passe d'au moins 6 caractères";
                }
            }
            else{
                $this->msg= "Votre prénom et nom ne doivent pas dépasser 255 caractères";
            }
        }
        else{
            $this->msg ="Veuillez renseigner tous les champs";
        }

        $this->result = ["success" => $this->success, "msg"=>$this->msg];
        echo json_encode($this->result);
    }
    public function traitement_login(){
        echo json_encode($_POST);
    }

}

$Ctrl_Register = new Ctrl_Register;
$Ctrl_Register->traitement_register();


?>