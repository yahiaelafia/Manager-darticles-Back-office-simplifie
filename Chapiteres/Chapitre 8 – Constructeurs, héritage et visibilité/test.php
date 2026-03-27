<?php

require 'BlogArticle.php';


$article1 = new BlogArticle("PDO en PHP", "Découvrir l'héritage.", "Yahia");
$article2 = new BlogArticle("PDO en JS", "Découvrir l'héritage.", "Ahmed");
$article3 = new BlogArticle("PDO en CSS", "Découvrir l'héritage.", "Oussama");
$article4 = new BlogArticle("PDO en HTML", "Découvrir l'héritage.", "Mohammed");
$article5 = new BlogArticle("PDO en FIGMA", "Découvrir l'héritage.", "Yassin");
$article6 = new BlogArticle("PDO en FIGMA", "Découvrir l'héritage.", "Yassir");



echo  $article1->afficher() . "<br>";
echo  $article2->afficher() . "<br>";
echo  $article3->afficher() . "<br>";
echo  $article4->afficher() . "<br>";
echo  $article5->afficher() . "<br>";
echo  $article6->afficher() . "<br>";




