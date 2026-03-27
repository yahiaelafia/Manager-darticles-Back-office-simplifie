<?php


class User {
    private $conn;
    private $table = "users";

    public $id_user;
    public $user_name;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }


    // create 


    public function create()  {
        $sql = "INSERT INTO {$this->table} (user_name, email) VALUES (:user_name, :email)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['user_name' => $this->user_name, 'email' => $this->email]);
        
        
    }


    // read 

    public function read() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // update

    public function update() {
        $sql = "UPDATE {$this->table} SET user_name=:user_name, email=:email WHERE id_user=:id_user";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            'user_name' => $this->user_name,
            'email' => $this->email,
            'id_user' => $this->id_user
        ]);
    }


    // delete

    public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE id_user:id_user";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            'id_user' => $this->id_user
         ]);

    }
}