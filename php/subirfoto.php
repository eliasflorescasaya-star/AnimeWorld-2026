<?php

session_start();

if(!isset($_SESSION["usuario"])){

    header("Location: ../cuenta.html");
    exit();

}

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "animeworld"
);

if($conexion->connect_error){

    die("Error de conexión");

}

$usuario = $_SESSION["usuario"];

if(isset($_FILES["foto"])){

    $archivo = $_FILES["foto"];

    if($archivo["error"] !== UPLOAD_ERR_OK){

        die("Error al subir la imagen");

    }

    $permitidos = [
        "image/jpeg",
        "image/png",
        "image/webp"
    ];

    if(!in_array($archivo["type"], $permitidos)){

        die("Formato no permitido");

    }

    if($archivo["size"] > 5 * 1024 * 1024){

        die("La imagen es demasiado grande");

    }

    $extension = pathinfo(
        $archivo["name"],
        PATHINFO_EXTENSION
    );

    $nombreNuevo =
        uniqid("perfil_", true)
        . "."
        . strtolower($extension);

    $ruta =
        "../imagenes/perfiles/"
        . $nombreNuevo;

    if(move_uploaded_file(
        $archivo["tmp_name"],
        $ruta
    )){

        $sql =
        "UPDATE usuarios
        SET foto = ?
        WHERE usuario = ?";

        $stmt =
        $conexion->prepare($sql);

        $stmt->bind_param(
            "ss",
            $nombreNuevo,
            $usuario
        );

        $stmt->execute();

        header(
            "Location: ../perfil.php"
        );

        exit();

    }else{

        echo "No se pudo guardar la imagen";

    }

}

?>