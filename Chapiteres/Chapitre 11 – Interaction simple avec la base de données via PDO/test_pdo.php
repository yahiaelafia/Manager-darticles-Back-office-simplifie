<?php

require 'database.php';

$db = (new Database())->getConnection();

$stmt = $db->query("SELECT * from posts");

$posts =  $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "Post_id : " . $post['id_post'] . "<br>" . "Title : " . $post['title'] . "<br>" . "Id_user : " . $post['id_user'] . "<br>" . "Publish_date : " . $post['publish_date'] ."<br>" . "USER : " . $post['id_user'] . "<br>" . "Category : " . $post['id_category'] .   "<br><br>";
}


echo "<br>";


echo "<br>";
echo "<br>";


$sql = "INSERT INTO posts (title, content, publish_date, statu, id_user, id_category) 
        VALUES (:title, :content, :publish_date, :statu, :id_user, :id_category)";
        
$stmt = $db->prepare($sql);

$stmt->execute([
    ':title'        => 'My First Post',
        ':content'      => 'This is a test content.',
        ':publish_date' => date('Y-m-d H:i:s'),
        ':statu'        => 'published',
        ':id_category'  => 1,
        ':id_user'      => 1, 
]);



echo "<br>";
echo "<br>";


$stmt = $db->prepare("UPDATE posts SET title = :title WHERE id_post = :id_post");
$stmt->execute(['title' => 'Zoubir', 'id_post' => 1]);


$stmt = $db->prepare("DELETE FROM posts WHERE id_post = :post");
$stmt->execute([
    'post' => 1
]);
