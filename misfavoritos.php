<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: cuenta.html");
    exit();
}

$conexion = new mysqli("localhost", "root", "", "animeworld");

$usuario = $_SESSION["usuario"];

$sql = "SELECT * FROM favoritos WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mis Favoritos</title>
</head>

<body style="background:url('imagenes/fondo.jpg') center/cover fixed; color:white; font-family:Arial; text-align:center;">

<div style="background-color:rgba(0,0,0,0.7); width:80%; margin:auto; margin-top:40px; padding:30px; border-radius:20px;">

<h1>❤️ Mis Favoritos ❤️</h1>

<h2>👋 Usuario: <?php echo $usuario; ?></h2>

<table border="1" align="center">
<tr>
<th>N°</th>
<th>Anime</th>
<th>Fecha</th>
</tr>

<?php
$contador = 1;

while($fila = $resultado->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$contador."</td>";
    echo "<td>".$fila["anime"]."</td>";
    echo "<td>".$fila["fecha"]."</td>";
    echo "</tr>";
    $contador++;
}

if($contador == 1){
    echo "<tr><td colspan='3'>No tienes favoritos todavía</td></tr>";
}
?>

</table>

<br>

<a href="trabajo.php">
<button>⬅ Volver</button>
</a>

</div>

</body>
</html>