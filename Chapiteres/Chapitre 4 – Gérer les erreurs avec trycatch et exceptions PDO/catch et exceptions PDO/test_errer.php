<?php

require 'connexion.php' ;
echo "<br>";


try {
    $conn->query("SELECT * from users");
    

}catch (PDOException $o) {
    file_put_contents('erreurs.log', $o->getMessage() . "\n" , FILE_APPEND);
    echo "Une erreur est survenue. Contactez l'administrateur.";
}



try {
    $conn->query("SELECT * from user");

}catch (PDOException $o) {
    file_put_contents('erreurs.log', $o->getMessage()  . "\n" , FILE_APPEND);
    echo "Une erreur est survenue. Contactez l'administrateur.";
}

