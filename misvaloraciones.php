<?php

session_start();

if(!isset($_SESSION["usuario"])){

header("Location: cuenta.html");
exit();

}

$conexion = new mysqli(
"localhost",
"root",
"",
"animeworld"
);

$usuario=$_SESSION["usuario"];

$sql="SELECT * FROM valoraciones
WHERE usuario=?";

$stmt=$conexion->prepare($sql);

$stmt->bind_param(
"s",
$usuario
);

$stmt->execute();

$resultado=$stmt->get_result();

?>

<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<title>Mis Valoraciones</title>

</head>

<body style="
background:url('imagenes/fondo1.jpg') center/cover fixed;
font-family:Arial;
color:white;">

<div style="
background-color:rgba(0,0,0,0.7);
width:80%;
margin:auto;
margin-top:40px;
padding:30px;
border-radius:20px;
text-align:center;">

<h1>
⭐ Mis Valoraciones ⭐
</h1>

<h2>
👋 Usuario:
<?php echo $usuario;?>
</h2>

<table
border="1"
align="center">

<tr>

<th>N°</th>
<th>Anime</th>
<th>Puntuación</th>

</tr>

<?php

$contador=1;

while($fila=$resultado->fetch_assoc()){

echo "

<tr>

<td>$contador</td>

<td>".$fila["anime"]."</td>

<td>".$fila["puntuacion"]." ⭐</td>

</tr>

";

$contador++;

}

if($contador==1){

echo "

<tr>

<td colspan='3'>
No tienes valoraciones todavía
</td>

</tr>

";

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