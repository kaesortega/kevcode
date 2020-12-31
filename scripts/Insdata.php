<?php 


    class Insdata{
        // ATRIBUTOS
        private $pdo;
        private $dates;
        private $query;


        // CONSTRUCTOR
        public function __construct($pdo, array $dates, string $query)
        {
            $this->pdo = $pdo;
            $this->dates = $dates;
            $this->query = $query;
        }

        // METODOS AUXILIARES

        private static function formatDates(array $dates){
            for ($i=0; $i < count($dates) ; $i++) { 
                $dates[$i] = ':'.$dates[$i];
            }
            return $dates;
        }


        public function up(array $mp){
            if (count($mp) == count($this->dates)){
                $mp = Insdata::formatDates($mp);
                $mp_datos = array();

                for ($i=0; $i < count($mp) ; $i++) { 
                    for ($j=$i; $j < count($this->dates); $j++) {
                        $mp_datos[$mp[$i]] = $this->dates[$j]; 
                        if ($i == $j) {
                             break;
                        }
                    }

                }


                 try {
                     $stmt = $this->pdo->prepare($this->query);
                     if($stmt->execute($mp_datos)){
                         $msj = true;
                         return $msj;
                     }else{
                         $msj = false;
                         return $msj;
                     }

                 } catch (Exception $e) {
                     $salida = "Hubo un error en la inserccion de datos".$e;
                     echo $salida;
                     return;
                 }
                
                
            }else{
                $error = "La cantidad de datos ingresados no corresponden a los marcadores de posiciones proporcionados";
                echo $error;
                return;
            }
        }
    }


?>