<?php 

    class Solicitud{
        //Atributos
        public $nombre;
        public $apellidoP;
        public $apellidoM;
        public $correo;
        public $empresa;
        public $pais;
        public $consulta;

        function __construct($nombre,$apellidoP,$apellidoM,$correo,$empresa,$pais,$consulta)
        {
            $this->nombre = $nombre;
            $this->apellidoP = $apellidoP;
            $this->apellidoM = $apellidoM;
            $this->correo = $correo;
            $this->empresa = $empresa;
            $this->pais = $pais;
            $this->consulta = $consulta;
        }

        public function mostrar(){
            $datos_soli = "Nombre: " . $this->nombre . "<br>";
            $datos_soli .= "Apellido paterno: " . $this->apellidoP . "<br>";
            $datos_soli .= "Apellido materno: " . $this->apellidoM . "<br>";
            $datos_soli .= "Correo: " . $this->correo . "<br>";
            $datos_soli .= "Empresa: " . $this->empresa . "<br>";
            $datos_soli .= "Pais: " . $this->pais . "<br>";
            $datos_soli .= "Consulta: " . $this->consulta . "<br>";

            echo $datos_soli;
        }

    }




?>