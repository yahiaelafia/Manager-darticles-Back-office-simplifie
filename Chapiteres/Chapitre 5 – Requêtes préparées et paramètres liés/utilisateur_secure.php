<?php
require 'connexion.php';

echo "<br>";


$stmt = $conn->prepare("INSERT into users (user_name, email) VALUES (:user_name, :email)");
$stmt->execute([
    'user_name' => 'Ahmed',
    'email' => 'ahmed@gmail.com'
]);

echo "user ajouté";


?>

<br><br>



<?php

require 'connexion.php';


echo "<br>";


$user_name = 'anas';
$email = 'anas@gmail.com';
$stmt = $conn->prepare("INSERT INTO users (user_name, email) VALUES (:user_name, :email)");
$stmt->bindParam(':user_name', $user_name);
$stmt->bindParam(':email', $email);
$stmt->execute();


echo "user ajouté";


?>



<?php 



    require 'connexion.php';


    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([
        'email' => 'yahia@email.com'
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Nom : " . $user['user_name'];
?>

<br><br>


<?php
require 'connexion.php';


echo "<br>";

$stmt = $conn->prepare("SELECT * FROM users WHERE id_user = ?");
$stmt->execute([1]);



$user = $stmt->fetch(PDO::FETCH_ASSOC);


echo "Nom : " . $user['user_name'];
echo "<br>";
echo "Email : " . $user['email'];

?>