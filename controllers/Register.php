<?php
class Register{
    public function __construct(){
        $views = $this->views();
    }

    /**
     * Chargement de la vue
     */
    public function views(){
        $urlParams = explode("/", htmlspecialchars($_GET["url"]));
        if(isset($urlParams) AND !empty($urlParams[1])){

            //Traitement du formualaire
            if(isset($_POST["valideRegister"])){
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $genre = htmlspecialchars($_POST["identite"]);
                $age = intval($_POST["age"]);
                $password = htmlspecialchars($_POST["password"]);

                if(!empty($username AND $email AND $genre AND $age AND $password)){
                    if(mb_strlen($username) <= 255){
                        if(mb_strlen($password) >= 6){

                            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                                //Découpage de la chaine
                                $username = explode(" ", $username);
                                $lastName = $username[0];
                                $firstName = $username[1];

                                /**
                                 * Génerer une clé unique
                                 */
                                $keyAccount = "";
                                $chaine = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

                                for ($i=0; $i < 16; $i++) { 
                                    $keyAccount .= $chaine[mt_rand(0, mb_strlen($chaine) -1)]; 
                                }

                                /**
                                 * Hash le mot de passe
                                 */
                                $password_hash = password_hash(sha1($_POST["password"]),PASSWORD_DEFAULT);
                                $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
                                $creer_compte = $Ctrl_Utilisateurs->insertEnseignant($lastName, $firstName, $age, $genre, $email, $password_hash, $keyAccount);
                                
                                if($creer_compte == true){
                                    $msg= "Cette adresse email est déjà associée à un compte";
                                }
                                else{
                                    $success ="Votre compte à bien été créer! <a href='Login'>connectez-vous maintenant</a>";
                                }
                            }
                            else{
                                $msg = "Adresse email saisie non valide";
                            }
                        }
                        else{
                            $msg ="Pour votre sécurité, veuillez renseigner un mot de passe d'au moins 6 caractères";
                        }
                    }
                    else{
                        $msg ="Votre prénom et nom ne doivent pas dépasser 255 caractères";
                    }
                }
                else{
                    $msg ="Veuillez renseigner tous les champs";
                }
            }
            require_once("views/registerEnseignants.view.php");
        }
        else{
            require_once("views/register.view.php");
        }
    }
}


?>