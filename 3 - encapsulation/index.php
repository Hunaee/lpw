<?php

$host = 'sg.be';
$db   = 'lpw';
$user = 'seetuser';
$pass = '01@rfba[W.f77-n3';


class PDO{

    public string $host;
    public string $db;
    public string $user;
    public string $pass;


    public function __construct(string $host, string $db, string $user, string $pass){
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        }
}




try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Connected to the database successfully");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}




// Réponse juste : 


// <?php
// class Database {
//   private $db;

//   public function getConnexion() {
//     if ($this->db == NULL) {
//       $this->db = new PDO('mysql:host=db;dbname=blog;charset=utf8', 'root', 'password123', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//     }
//     return $this->db;
//   }
// }

// $db = new Database();
// $conn = $db->getConnexion();
// var_dump($conn); // object(PDO)#2 (0) { }



