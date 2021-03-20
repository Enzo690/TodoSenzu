<?php

require_once('./Vue/Vue.php');
require_once('./Model/List.php');

class TaskController {

    private $list;

    public function __construct() {
        $this->list = new Lists();
    }

    public function show() {
        $vue = new Vue("Add");
        $vue->generer(array());
    }

    public function add() {
        $this->list->ajouterList($_POST['name']);
    }


}