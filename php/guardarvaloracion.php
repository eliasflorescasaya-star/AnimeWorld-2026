<?php

session_start();

$conexion = new mysqli("localhost", "root", "", "animeworld");

if($conexion->connect_error){
    die("Error de conexión");
}

if(!isset($_SESSION["usuario"])){
    header("Location: ../cuenta.html");
    exit();
}

$usuario = $_SESSION["usuario"];
$anime = $_POST["anime"];
$puntuacion = $_POST["puntuacion"];
$pagina = $_POST["pagina"];

$sql = "INSERT INTO valoraciones(usuario, anime, puntuacion)
        VALUES(?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssi", $usuario, $anime, $puntuacion);

if($stmt->execute()){
    header("Location: " . $pagina);
    exit();
}else{
    echo "Error al guardar valoración";
}

$stmt->close();
$conexion->close();

?>