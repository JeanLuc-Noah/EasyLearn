<?php

abstract class DBconnection{

    //Information de connexion a la base de donnnees
    private $host = "localhost";
    private $db_name = "easyLearn";
    private $user = "root";
    private $password ="";

    //Propriete contenant la connexion
    protected $_connexion;

    public function getConnection(){
        $this->_connexion = null;
        
        try{
            $this->_connexion = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->user, $this->password);
            $this->_connexion->exec('set names utf8');
        }
        catch(Exception $e){
            echo "Message d'erreur: ". $e->getMessage();
        }
    }

}

?>