//registro de cliente
<?php
    //variables de conexión
    $server = "localhost";
    $database = "dbcomercio";
    $user = "root";
    $password = "";
    //conexión a la base de datos
    $conexion = mysqli_connect($server, $user, $password, $database);
    //variables de entrada
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $fecha = $_POST['fecha'];
    $genero = $_POST['genero'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['cp'];
    $tipo = $_POST['tipo'];
    $estatus = $_POST['estatus'];
    $fecha_alta = $_POST['fecha_alta'];
    $fecha_baja = $_POST['fecha_baja'];
    $fecha_mod = $_POST['fecha_mod'];
    $fecha_ultima_mod = $_POST['fecha_ultima_mod'];
    $fecha_ultimo_acceso = $_POST['fecha_ultimo_acceso'];
    $fecha_ultimo_acceso_web = $_POST['fecha_ultimo_acceso_web'];
    $fecha_ultimo_acceso_movil = $_POST['fecha_ultimo_acceso_movil'];
    $fecha_ultimo_acceso_pc = $_POST['fecha_ultimo_acceso_pc'];
    $fecha_ultimo_acceso_otro = $_POST['fecha_ultimo_acceso_otro'];


