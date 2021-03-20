<?php

require_once 'Model/Model.php';

class Lists extends Model {

    public function getLists() {
        $sql = 'select id, name, complete from task';
        $list = $this->executerRequete($sql, array());
        return $list;
    }

    public function ajouterList($name) {
        $sql = 'insert into task(name, complete)'
            . ' values(?, ?)';
        $this->executerRequete($sql, array(htmlspecialchars($name),1));
    }
}