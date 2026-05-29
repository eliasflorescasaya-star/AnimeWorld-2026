<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Comentario guardado</title>

<style>

body{
background:url('../imagenes/fondo1.jpg') center/cover fixed;
font-family:Arial,sans-serif;
color:white;
margin:0;
}

.contenedor{
background-color:rgba(0,0,0,0.7);
width:80%;
margin:auto;
margin-top:50px;
padding:30px;
border-radius:20px;
text-align:center;
}

table{
margin:auto;
margin-top:20px;
border-collapse:collapse;
background-color:rgba(255,255,255,0.1);
}

th,td{
border:1px solid white;
padding:10px;
}

th{
background-color:rgba(255,255,255,0.3);
}

button{
padding:15px 30px;
border:none;
border-radius:30px;
font-size:18px;
cursor:pointer;
background:linear-gradient(45deg,#ff4da6,#ff80bf);
color:white;
font-weight:bold;
box-shadow:0px 0px 15px #ff4da6;
}

</style>

</head>

<body>

<div class="contenedor">

<?php

$conexion=new mysqli(
"localhost",
"root",
"",
"animeworld"
);

if($conexion->connect_error){

die("Error de conexión");

}

if($_SERVER["REQUEST_METHOD"]=="POST"){

$nombre=$_POST['nombre'];

$anime=$_POST['anime'];

$personaje=$_POST['personaje'];

$comentario=$_POST['comentario'];

$sql="INSERT INTO comentarios
(nombre,anime,personaje,comentario)

VALUES(?,?,?,?)";

$stmt=$conexion->prepare($sql);

$stmt->bind_param(
"ssss",
$nombre,
$anime,
$personaje,
$comentario
);

if($stmt->execute()){

echo "<h1>🌸 ¡Gracias por participar! 🌸</h1>";

echo "<h2>
✅ Tu comentario fue guardado correctamente
</h2>";

}

$stmt->close();

}

?>

<h2>💬 Comentarios guardados</h2>

<table>

<tr>

<th>N°</th>
<th>Nombre</th>
<th>Anime</th>
<th>Personaje</th>
<th>Comentario</th>

</tr>

<?php

$resultado=$conexion->query(
"SELECT * FROM comentarios"
);

$contador=1;

while($fila=$resultado->fetch_assoc()){

echo "

<tr>

<td>$contador</td>

<td>".$fila['nombre']."</td>

<td>".$fila['anime']."</td>

<td>".$fila['personaje']."</td>

<td>".$fila['comentario']."</td>

</tr>

";

$contador++;

}

$conexion->close();

?>

</table>

<br><br>

<a href="../trabajo.php">

<button>

🌸 Volver a Anime World 🌸

</button>

</a>

</div>

</body>
</html>