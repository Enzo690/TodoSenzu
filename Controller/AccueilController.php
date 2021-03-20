<?php

require_once('./Vue/Vue.php');
require_once('./Model/List.php');

class AccueilController {


    private $list;

    public function __construct() {
        $this->list = new Lists();
    }



    public function accueil() {
        $lists = $this->list->getLists();
        $vue = new Vue("Accueil");
        $vue->generer(array('lists' => $lists));
    }

}