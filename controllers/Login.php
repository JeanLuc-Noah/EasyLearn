<?php
class Login{

    protected $views;

    public function __construct(){
        $this->loaderView();
    }
    public function loaderView(){

        $this->views = "views/login.view.php";
        require($this->views);
    }
}

?>