<?php
require_once 'database.php';

class Article {
    public static function all() {
        $db = new database();
        $conn = $db->getConnection();
        $sql = "SELECT id, title, description, auteur, date_pub FROM article ORDER BY date_pub DESC";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function create($title, $description, $auteur) {
        $db = new database();
        $conn = $db->getConnection();
        $sql = "INSERT INTO article (title, description, auteur, date_pub) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$title, $description, $auteur]);
    }
    public static function delete($id) {
        $db = new database();
        $conn = $db->getConnection();
        $sql = "DELETE FROM article WHERE id = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>