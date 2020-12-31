<?php 

    include_once "ResponsabilityData.php";

    class Exdata implements ResponsabilityData{
        // ATRIBUTOS
        private $pdo;
        private $query;
        
        // CONSTRUCT

        public function __construct(PDO $pdo, string $query){
            $this->pdo = $pdo;
            $this->query = $query;
        }

        // METODOS 

        public function down()
        {
            $stmt = $this->pdo->query($this->query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        
    }

    

    

?>