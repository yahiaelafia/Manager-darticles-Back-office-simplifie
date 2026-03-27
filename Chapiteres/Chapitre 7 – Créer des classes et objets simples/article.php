<?php

class Article {
    public $titre;

    public $contenut;


    public function afficher() {
        return "Titre : " . $this->titre . " - contenut : " . $this->contenut;
    }

}

    class commontaire {

    private $contenut;
    public $auteur;
    public $date_publish;
    public $article;

    public function afficher() {
        return "contenut : " . $this->contenut . "Auter : " . $this->auteur . "Date_publish : " . $this->date_publish . " <br> Article : " . $this->article->afficher();
    }

    }


$article1 = new Article();
$article1->titre = "Introduction à PHP <br>";
$article1->contenut = "PHP est un langage de script côté serveur. <br>";



echo $article1->afficher();



$article2 = new Article();
$article2->titre = "Programmation orientée objet <br>";
$article2->contenut = "La POO facilite la modularité et la maintenance.";


echo "<br>" . $article2->afficher();


$comment1 = new commontaire();


$comment1->contenut = "La POO facilite la modularité et la maintenance.";
$comment1->auteur = "Yahia";
$comment1->date_publish = " 2026/02/22";
$comment1->article = $article2;

echo $comment1->afficher();



?>




<?php

// class Article {
//     public $titre;
//     public $contenut;

//     public function afficher() {
//         return "Titre : " . $this->titre . " - contenut : " . $this->contenut;
//     }
// }

// $article1 = new Article("Introduction à PHP", "PHP est un langage de script côté serveur.");
// echo $article1->afficher()."<br>";
// $article2 = new Article("Programmation orientée objet", "La POO facilite la modularité et la maintenance.");
// echo $article2->afficher()."<br>";

?>