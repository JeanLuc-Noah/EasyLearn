<?php
session_start();

require_once("Ctrl_Utilisateurs.php");
require_once("../../models/DBconnection.php");
require_once('../../models/Etudiants.php');
require_once('../../models/Enseignants.php');

class Ctrl_Login {
    private $email;
    private $password;
    
    /**
     * Propriete a traiter en json
     */
    private $success;
    private $msg;
    protected $result;

    public function __construct(){
        $this->success = 0;

        if(!empty($_POST["email"]) AND !empty($_POST['password'])){
            $this->email = htmlspecialchars($_POST['email']);
            $this->password = htmlspecialchars($_POST['password']);

            if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                if(mb_strlen($this->password) >=6){

                    $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
                    $infoEtudiant = $Ctrl_Utilisateurs->Seconnecter($this->email);
                    $infoEnseigant = $Ctrl_Utilisateurs->SeConnecter_enseignant($this->email);

                    if(password_verify(sha1($this->password), $infoEtudiant['password'])){
                        $_SESSION["user"]['keyAccount'] = $infoEtudiant['keyAccount'];
                        $this->success = 1;
                        $this->msg = $infoEtudiant['keyAccount'];
                    }
                    elseif(password_verify(sha1($this->password), $infoEnseigant["password"])){
                        $_SESSION["enseignant"]['keyAccount'] = $infoEnseigant['keyAccount'];
                        $this->success = 2;
                        $this->msg = $infoEnseigant['keyAccount'];
                    }
                    else{
                        $this->msg= "Adresse email et/ou mot de passe incorrect";
                    }
                }
                else{
                    $this->msg="Mot de passe trop court (Minimum 6 caractéres)";
                }
            }
            else{
                $this->msg="Adresse email non valide";
            }
        }
        else{
            $this->msg= "Veuillez renseigner tous les champs";
        }

        $this->result = ["success"=> $this->success, "msg"=>$this->msg];
        echo json_encode($this->result);
    }
}
$Ctrl_Login = new Ctrl_Login;

?>