<?php
require_once 'database.php';
class Article {
    public static function readAll(){
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT auteur,title,description,date_pub FROM article ";
        $stmt = $conn->query($sql);  
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>