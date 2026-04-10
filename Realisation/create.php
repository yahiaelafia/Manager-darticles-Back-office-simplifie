<?php 
require_once 'Article.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $auteur = $_POST['auteur'];

    if (Article::create($title, $description, $auteur)) {
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contant">
        <h1>Nouvel Article</h1>
        <form method="POST">
            <input type="text" name="title" placeholder="Titre" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
            <textarea name="description" placeholder="Description" required style="width: 100%; height: 100px; padding: 10px; margin-bottom: 10px;"></textarea><br>
            <input type="text" name="auteur" placeholder="Auteur" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
            <button type="submit" style="padding: 10px 20px; cursor: pointer;">Enregistrer</button>
            <a href="index.php">Annuler</a>
        </form>
    </div>
</body>
</html>