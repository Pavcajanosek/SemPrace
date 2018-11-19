<?php
class UserRepository{
    private $conn = null;

    public function __construct($conn){
        $this->conn=$conn;
    }
    public function getAllUsers(){
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getByEmail($mail){
        $stmt=$this->conn->prepare("SELECT * FROM users WHERE email LIKE concat('%', email, '%')");
        $stmt->bindParam(":email",$mail);
        $stmt->execute();
        return $stmt->fetchAll();

    }



}