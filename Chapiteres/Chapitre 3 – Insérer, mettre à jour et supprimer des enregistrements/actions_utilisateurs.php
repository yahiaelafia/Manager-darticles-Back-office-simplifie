<?php



    require 'connexion.php';


    echo "<br>";

try {

    $stmt = $pdo->prepare("INSERT into users (user_name, email) values (:user_name, :email)");
    $stmt->execute([
        'user_name' => 'Yahia',
        'email' => 'yahia@email.com'
    ]);
    echo "user ajouté avec succés.";

echo "<br>";
echo "<br>";
echo "<br>";


    $stmt = $pdo->prepare("UPDATE users set user_name = :user_name, email = :email where id_user = :id_user");

    $stmt->execute([
        'user_name' => 'oussama',
        'email' => 'oussama@gmail.com',
        'id_user' => 2
    ]);
    echo "user mise à jour";



echo "<br>";
echo "<br>";
echo "<br>";



    $stmt = $pdo->prepare("DELETE from users where id_user = :id_user");

    $stmt->execute(['id_user' => 2]);

    echo "user supprimé.";


    echo "<br>";
echo "<br>";
echo "<br>";



echo $stmt->rowCount() . " ligne(s) affectée(s).";




}catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}









?>