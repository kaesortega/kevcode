<?php 

    // IMPORTANDO CLASES
    include_once "Solicitud.php";
    include_once "Datos.php";
    include_once "Insdata.php";
    include_once "Exdata.php";

    // INICIANDO UNA SESION
    session_start();

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
    
    $datos1 = array();
    $datos1[] = htmlentities($nombre);
    $datos1[] = htmlentities($apellidoP);
    $datos1[] = htmlentities($apellidoM);
    $datos1[] = htmlentities($correo);
    $datos1[] = htmlentities($telefono);
    $datos1[] = htmlentities(strtoupper($empresa));
    $datos1[] = htmlentities($pais);
    

    $datosO = new Datos($datos1);
    $datosValidados = $datosO->validar();

    if ($datosValidados != false) {
         if(strpos($datos1[3],"@") == false ){
             $msgE = "Debe ingresar un correo valido";
         }
         if(is_int($datos1[4]) == false){
             $msgE = "Debe ingresar un numero de telefono valido";
         }
    }


    // INSERCCIONES Y EXTRACCIONES A LA DB

    // QUERYS INSERCCIONES 

    $sql = "INSERT INTO clientes(id_cliente,nombre,apellido_paterno,apellido_materno,correo,telefono,empresa,pais) VALUES(default,:v2,:v3,:v4,:v5,:v6,:v7,:v8)";

    $sql2 = "INSERT INTO solicitudes(id_solicitud,id_cliente,solicitud,fecha) VALUES (default,:v2,:v3,now())";

    // QUERYS EXTRACCIONES

    $sqlE1 = "SELECT * FROM clientes WHERE correo = '".$datos1[3]."'";

    // PDO
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=freelancer','kaesortega','Demo0412$');

    

    $mp1 = array();
    $mp1[] = "v2";
    $mp1[] = "v3";
    $mp1[] = "v4";
    $mp1[] = "v5";
    $mp1[] = "v6";
    $mp1[] = "v7";
    $mp1[] = "v8";

    $mp2 = array();
    $mp2[] = "v2";
    $mp2[] = "v3";

    
    
    // EXTRACCIONES
    $ex1 = new Exdata($pdo,$sqlE1);
    $datosE = $ex1->down();

    $datos2 = array();
    $datos2[] = $datosE['id_cliente'];
    $datos2[] = htmlentities($consulta);


    // INSERCCIONES

    if (is_null($datos2[0])==TRUE) {
        $ins1 = new Insdata($pdo,$datos1,$sql);
        $response1 = $ins1->up($mp1);

        $ex2 = new Exdata($pdo,$sqlE1);
        $datosE = $ex2->down();
        $datos2[0] = $datosE['id_cliente'];

        $ins2 = new Insdata($pdo,$datos2,$sql2);
        $response2 = $ins2->up($mp2);

        if ($response1 || $response2) {
            $_SESSION['respuestaB'] = "Solicitud tomada, pronto lo atenderemos";
            header('Location: ../index.php#responseServeMsg');
            return;
        }else{
            $_SESSION['respuestaM'] = "Ocurrio un error, intentelo mas tarde";
            header('Location: ../index.php#responseServeMsg');
            return;
        }
        
    }else{
    
         
        $ins2 = new Insdata($pdo,$datos2,$sql2);
        $response3 = $ins2->up($mp2);
        if ($response3) {
            $_SESSION['respuestaB'] = "Solicitud tomada, pronto lo atenderemos";
            header('Location: ../index.php#responseServeMsg');
            return;
        }else{
            $_SESSION['respuestaM'] = "Ocurrio un error, intentelo mas tarde";
            header('Location: ../index.php#responseServeMsg');
            return;
        }
    }
    

    





?>