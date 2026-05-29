<?php

session_start();

$conexion = new mysqli(
"localhost",
"root",
"",
"animeworld"
);

if($conexion->connect_error){

die("Error de conexión");

}

$sql="SELECT anime,
AVG(puntuacion) AS promedio
FROM valoraciones
GROUP BY anime
ORDER BY promedio DESC";

$resultado=$conexion->query($sql);

?>

<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<title>
🏆 Ranking AnimeWorld
</title>

</head>

<body style="
background:url('imagenes/rem.jpg')
center/cover fixed;
font-family:Arial;
color:white;">

<div style="
background-color:rgba(0,0,0,0.7);
width:80%;
margin:auto;
margin-top:50px;
padding:30px;
border-radius:20px;
text-align:center;">

<h1>

🏆 Ranking de Animes 🏆

</h1>

<table
border="1"
align="center">

<tr>

<th>Posición</th>
<th>Anime</th>
<th>Puntuación</th>

</tr>

<?php

$posicion=1;

while($fila=
$resultado->fetch_assoc()){

echo "

<tr>

<td>".$posicion."</td>

<td>".$fila["anime"]."</td>

<td>".round(
$fila["promedio"],
1
)." ⭐</td>

</tr>

";

$posicion++;

}

?>

</table>

<br>

<a href="trabajo.php">

<button>

⬅ Volver

</button>

</a>

</div>

</body>

</html>