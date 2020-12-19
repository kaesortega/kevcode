<?php 

    // IMPORTANDO CLASES
    include_once "Solicitud.php";
    include_once "Datos.php";

    // RECIBIENDO DATOS
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $empresa = $_POST['empresa'];
    $pais = $_POST['pais'];
    $consulta = $_POST['consulta'];

    // PROCESANDO DATOS
    
    $datos = array();
    $datos[] = $nombre;
    $datos[] = $apellidoP;
    $datos[] = $apellidoM;
    $datos[] = $correo;
    $datos[] = $telefono;
    $datos[] = $empresa;
    $datos[] = $pais;
    $datos[] = $consulta;

    $datosO = new Datos($datos);
    $datosValidados = $datosO->validar();

    if($datosValidados == false){
        echo "Faltan datos";
    }else{
        echo "Todos los datos completos";
    }

    



?>