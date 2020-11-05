<?php
    class Manager extends conexao {

        public function insertClient($table, $data){
            $pdo = parent::get_instance();  
            $fields = implode(",", array_keys($data));
            $values = ":".implode(", :", array_keys($data));
            $sql = "INSERT INTO $table ($fields) VALUES ($values)";
            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key",$value, PDO::PARAM_STR);
            }

            $statement->execute();
        }

        public function insertAluno($table, $data){
            $pdo = parent::get_instance();  
            $fields = implode(",", array_keys($data));
            $values = ":".implode(", :", array_keys($data));
            $sql = "INSERT INTO $table ($fields) VALUES ($values)";
            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key",$value, PDO::PARAM_STR);
            }

            $statement->execute();
        }

        public function insertAnuncio($table, $data){
            $pdo = parent::get_instance();  
            $fields = implode(",", array_keys($data));
            $values = ":".implode(", :", array_keys($data));
            $sql = "INSERT INTO $table ($fields) VALUES ($values)";
            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key",$value, PDO::PARAM_STR);
            }

            $statement->execute();
        }

        public function ListClient($table) {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM $table ORDER BY ";

        }

    }

?>
