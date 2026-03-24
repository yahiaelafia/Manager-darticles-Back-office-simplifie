<?php

require 'connexion.php';

echo "<br>";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$nom = htmlspecialchars(trim($_POST['nom']));
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

if(!$email){
    die("Email invalide !");
}

echo "Nom : " . $nom;
echo "<br>";
echo "Email : " . $email . "<br>";


try {

$stmt = $conn->prepare("INSERT INTO users (user_name, email) VALUES (:name, :email)");

$stmt->execute([
'name' => $nom,
'email' => $email
]);

echo "<br>User ajouté avec succès.";

}catch (PDOException $o) {

file_put_contents('logs/errors.log', $o->getMessage() . "\n", FILE_APPEND);

echo "Une erreur est survenue. Contactez l'administrateur.";

}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouté user</title>
</head>
<body>
    
    <br><br>

<form action="" method="POST">

<input type="text" name="nom" placeholder="Nom">

<br><br>

<input type="email" name="email" placeholder="Email">

<br><br>

<button type="submit">Ajouter</button>

</form>

</body>
</html>

