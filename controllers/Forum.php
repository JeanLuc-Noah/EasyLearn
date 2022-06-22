<?php
class Forum{

    public function __construct()
    {   
        $Ctrl_Utilisateurs = new Ctrl_Utilisateurs;
        $InfoEtudiant = $Ctrl_Utilisateurs->paramatres_session();


        //Si la variable GET existe et diffente de vide
        if(isset($_GET["url"]) AND !empty($_GET["url"])){
            $urlParams = explode("/",$_GET['url']);

            if(sizeof($urlParams) < 2){
                require_once("views/forum.view.php");
            }
            else if($urlParams[1] == "newTopic"){
                require_once("views/published_forum.php");
                
            }
        }
    }

}


?> 