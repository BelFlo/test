<?php

    if(!isset($_POST["nombre"]) || !isset($_POST["correo"])) exit();

    include_once "conexion.php";
    $nombre = $_POST["nombre"];
    $apellidoM = $_POST["apellidoMaterno"];
    $apellidoP = $_POST["apellidoPaterno"];    
    $correo = $_POST["correo"];
    $contra = $_POST["contra"];
    $departamento = $_POST["departamento"];
    
    $sentencia = $base_de_datos->prepare("INSERT INTO tblusuarios(paterno, materno, nombre, correo, passw, departamento) VALUES (?, ?, ?, ?, ?, ?);");
    $resultado = $sentencia->execute([strtoupper($apellidoP), strtoupper($apellidoM), strtoupper($nombre), $correo, strtoupper($contra), strtoupper($departamento)]);

    ?>
    <?php
    if($resultado === TRUE){         
        ?>
        <div class="aviso" role="alert">
            <h1>¡REGISTRO EXITOSO!</h1>
        </div>
            <?php        
        header("refresh: 5; url=../index.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }

    ?>