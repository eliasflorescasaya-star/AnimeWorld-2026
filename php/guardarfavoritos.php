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
$pagina = $_POST["pagina"];

$sql = "INSERT INTO favoritos(usuario, anime)
        VALUES(?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("ss", $usuario, $anime);

if($stmt->execute()){
    header("Location: " . $pagina);
    exit();
}else{
    echo "Error al guardar favorito";
}

$stmt->close();
$conexion->close();

?>