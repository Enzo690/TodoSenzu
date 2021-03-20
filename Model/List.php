<?php

require_once 'Model/Model.php';

class Lists extends Model {


// Renvoie la liste des commentaires associés à un billet

/*
    public function getList($idList) {
        $sql = 'select COM_ID as id, COM_DATE as date, id_membre,'
            . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
            . ' where BIL_ID=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }
*/
    public function getLists() {
        $sql = 'select id, name, user_id, from list';
        $list = $this->executerRequete($sql, array());
        return $list;
    }

    // Ajoute un commentaire dans la base
    public function ajouterList($auteur,$titre) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID, id_membre)'
            . ' values(?, ?, ?, ?, ?)';
        $date = date(DATE_W3C);  // Récupère la date courante
        $this->executerRequete($sql, array($date, htmlspecialchars($auteur), htmlspecialchars($contenu), $idBillet, $id_membre));
    }
}