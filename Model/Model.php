<?php

/**
 * Classe abstraite Modèle.
 * Centralise les services d'accès à une base de données.
 * Utilise l'API PDO
 *
 * @author Baptiste Pesquet
 */
abstract class Model {

    private $bdd;


    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    /**
     * Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
     * 
     * @return PDO L'objet PDO de connexion à la BDD
     */
    private function getBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO('sqlite:'.dirname(__FILE__).'./database.sqlite');
            $this->bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->bdd;
    }

}