<?php 


$host = 'localhost';
$dbname = 'blog';
$username = 'root';
$password = 'yahia123';



try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexon réussie à la base $dbname";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}


?>