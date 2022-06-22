<?php
session_start();
define("WEBSITE_NAME", "EasyLearn");

require_once("controllers/Crtl/Ctrl_Utilisateurs.php");
require_once("models/DBconnection.php");
require_once("models/Formations.php");   
require_once("models/Etudiants.php");
require_once("models/Enseignants.php");
require_once("models/Formation_cursus.php");
require_once("controllers/Administrateur.php");

if(!empty($_GET["url"]))
{
    //Sepation de parametre d'url
    $url_params = explode("/",$_GET['url']);
    $controller = ucfirst($url_params[0]);
    $controllerFile = "controllers/".$controller.".php";

    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();
    }
    else{
        http_response_code(404);
        echo "Page introvable";
    }
}
else
{
    require_once("controllers/Home.php");
    $Home = new Home();
}

?>