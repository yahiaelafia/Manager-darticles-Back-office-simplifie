<?php 
require_once 'Article.php'; 
if (isset($_GET['delete'])) {
    Article::delete($_GET['delete']);
    header("Location: index.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blog Manager - Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contant">
        <h1>Liste des Articles</h1>
        <a href="create.php" class="btn-add" style="margin-bottom: 20px; display: inline-block;">+ Ajouter un Article</a>
        
        <table border="1" width="100%" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(Article::all() as $art): ?>
                <tr>
                    <td><?= htmlspecialchars($art['title']) ?></td>
                    <td><?= htmlspecialchars($art['auteur']) ?></td>
                    <td><?= $art['date_pub'] ?></td>
                    <td>
                        <a href="index.php?delete=<?= $art['id'] ?>" 
                           onclick="return confirm('Voulez-vous vraiment supprimer cet article ?')" 
                           style="color: red;">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>