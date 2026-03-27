

<?php

class Database {

    private $host = "localhost";
    private $db_name = "blog";
    private $username = "root";
    private $password = "yahia123";
    public  $conn;


    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8", $this->username, $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $o) {
            echo "Erreur de connexion : " . $o->getMessage();
        }
        return $this->conn;
    }

}

