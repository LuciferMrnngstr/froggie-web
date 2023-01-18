<?php
    include_once 'database.php';

    class Account {
        public $username;
        public $password;

        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function check($inputUser, $inputPass){
            $sql = "SELECT * FROM user WHERE username=:username AND password=:password;";

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':username', $inputUser);
            $query->bindParam(':password', $inputPass);

            if($query->execute()){
                $data = $query->fetch();
            }

            return $data;
        }
    }
?>