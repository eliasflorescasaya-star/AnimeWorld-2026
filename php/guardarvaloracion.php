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


$puntuacion = filter_input(
    INPUT_POST,
    "puntuacion",
    FILTER_VALIDATE_INT
);

if($puntuacion === false || $puntuacion < 1 || $puntuacion > 5){
    die("Puntuación no válida");
}


$pagina = $_POST["pagina"] ?? "../trabajo.php";

$paginasPermitidas = [
    "../trabajo.php",
    "../re_zero.php",
    "../naruto.php",
    "../mushoku.php",
    "../darling in the franxx.php",
    "../elfenlieed.php",
    "../blackclover.php",
    "../bleach.php",
    "../classroom.php",
    "../konosuba.php",
    "../nazo.php",
    "../nogame.php",
    "../sao.php",
    "../solo_leveling.php",
    "../tatenoyuusha.php",
    "../akame.php"
];


if(!in_array($pagina, $paginasPermitidas, true)){
    $pagina = "../trabajo.php";
}

$sql = "INSERT INTO valoraciones(usuario, anime, puntuacion)
        VALUES(?, ?, ?)";

$stmt = $conexion->prepare($sql);

if(!$stmt){
    die("Error al preparar la consulta");
}

$stmt->bind_param(
    "ssi",
    $usuario,
    $anime,
    $puntuacion
);

if($stmt->execute()){

    header("Location: " . $pagina);
    exit();

}else{

    echo "Error al guardar valoración";
}

$stmt->close();
$conexion->close();

?>