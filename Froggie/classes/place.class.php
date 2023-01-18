<?php
    include_once 'database.php';

    class Place {
        public $saudi;
        public $italy;
        public $norway;
        public $france;
        public $japan;
        public $canada;

        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function fetch($userID){
            $sql = "SELECT * FROM place WHERE user_id=:user_id;";

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':user_id', $userID);

            if($query->execute()){
                $data = $query->fetch();
            }

            return $data;
        }

        function edit($userID){
            $sql = "UPDATE place SET saudi=:saudi, italy=:italy, norway=:norway, 
                    france=:france, japan=:japan, canada=:canada WHERE user_id=:user_id;";
            
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':saudi', $this->saudi);
            $query->bindParam(':italy', $this->italy);
            $query->bindParam(':norway', $this->norway);
            $query->bindParam(':france', $this->france);
            $query->bindParam(':japan', $this->japan);
            $query->bindParam(':canada', $this->canada);
            $query->bindParam(':user_id', $userID);

            if($query->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>