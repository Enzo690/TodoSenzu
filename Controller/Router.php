<?php

require_once('AccueilController.php');
require_once('TaskController.php');


class Router {
    private $ctrlIndex;

    public function __construct() {
        $this->ctrlIndex = new AccueilController();
        $this->ctrlTask = new TaskController();
    }


    public function routerRequest(){

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'add') {
                $this->ctrlTask->show();
            }

            if ($_GET['action'] == 'store') {
                $this->ctrlTask->add();
                header('Location: http://localhost/TodoList/');
            }
            if ($_GET['action'] == 'get') {
                $this->ctrlTask->get();
            }
            
        } 
        else{
            $this->ctrlIndex->accueil();
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }
}

?>