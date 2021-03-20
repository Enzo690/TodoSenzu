<?php

class Vue {

    private $fichier;
    
    // Titre de la vue (défini dans le fichier vue)
    private $titre;

    public function __construct($action) {

        $this->fichier = "Vue/vue" . $action . ".php";
    }

    // Génère et affiche la vue
    public function generer($donnees) {
        
        $contenu = $this->genererFichier($this->fichier, $donnees);
        $vue = $this->genererFichier('Vue/layout.php',
                array('titre' => $this->titre, 'contenu' => $contenu));
        // Renvoi de la vue
        echo $vue;
    }

    private function genererFichier($fichier, $donnees) {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);
            ob_start();
            require $fichier;
            
            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }

}