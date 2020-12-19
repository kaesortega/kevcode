<?php 

    class Datos{
        //ATRIBUTOS
        public $datos;

        //CONSTRUCTOR

        function __construct($datos)
        {
            $this->datos = $datos;
        }

        //METODOS

        public function validar(){
            $bin = 0;
            for ($i=0; $i < count($this->datos) ; $i++) { 
                if (isset($this->datos[$i]) == FALSE || $this->datos[$i] == "") {
                    $bin += 1;
                }else{
                    $bin += 0;
                }
            }
            if($bin == 0){
                // echo "Todos los datos completos";
                return true;
            }else{
                // echo "Faltan datos";
                return false;
            }

        }

    }


?>