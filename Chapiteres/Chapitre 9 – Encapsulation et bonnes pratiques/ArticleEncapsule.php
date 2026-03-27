<?php


class Article {
    private $titre;
    private $contenut;


    public function setTitre($titre) {
        if (!empty($titre) && strlen($titre) > 5) {
            $this->titre = $titre;
        }else {
            echo "Titre invalide.";
        }
    }




    public function getTitre() {
        return $this->titre;
    }


    public function setcontenut($contenut) {
        $this->contenut = htmlspecialchars($contenut);
    }

    public function getcontenut() {
        return $this->contenut;
    }



    public function afficher() {
        return "Titre : {$this->titre} <br> contenut : {$this->contenut}";
    }
}


