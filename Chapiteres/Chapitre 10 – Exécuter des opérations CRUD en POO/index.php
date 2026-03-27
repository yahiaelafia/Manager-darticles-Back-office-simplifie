<?php


require 'Database.php';
require 'user.php';



// connexion 

$database = new Database();


$db = $database->getConnection();

// créer un users

$user = new user($db);

$user->user_name = "said";

$user->email = "said@gmail.com";

$user->create();







// lere les users 

$liste = $user->read();
    foreach ($liste as $o) {
        echo $o['user_name'] . " - " . $o['email'] . "<br>";
    }
