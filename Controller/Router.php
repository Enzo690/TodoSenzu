<?php

require_once('AccueilController.php');

class Router {
    private $ctrlIndex;

    public function __construct() {
        $this->ctrlIndex = new AccueilController();
    }


    public function routerRequest(){

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'accueil') {
                
                

            }
        }    
    }
}

?>