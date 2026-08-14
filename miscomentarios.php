<?php

session_start();

/* =============================
   VERIFICAR SESIÓN
============================= */

if(!isset($_SESSION["usuario"])){

    header("Location: cuenta.html");
    exit();

}

$usuario = $_SESSION["usuario"];


/* =============================
   CONEXIÓN
============================= */

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "animeworld"
);

if($conexion->connect_error){

    die("Error de conexión: " . $conexion->connect_error);

}


/* =============================
   OBTENER COMENTARIOS
============================= */

$sql = "
SELECT nombre, anime, personaje, comentario
FROM comentarios
WHERE nombre = ?
";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("s", $usuario);

$stmt->execute();

$resultado = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Mis comentarios - Anime World</title>

<link rel="icon" href="imagenes/fondo.jpg">

<style>

body{

    margin:0;

    font-family:Arial,sans-serif;

    background:
    linear-gradient(
        rgba(0,0,0,0.70),
        rgba(0,0,0,0.85)
    ),
    url("imagenes/fondo.jpg")
    center/cover fixed;

    color:white;

}

.contenedor{

    width:85%;

    margin:40px auto;

    padding:30px;

    background:rgba(0,0,0,0.80);

    border-radius:25px;

    box-shadow:
    0 0 20px #ec4899,
    0 0 35px #7c3aed;

    text-align:center;

}

h1{

    color:#f472b6;

    text-shadow:
    0 0 10px #ec4899,
    0 0 20px #8b5cf6;

}

.usuario{

    color:#c084fc;

    font-size:20px;

}

table{

    width:100%;

    margin-top:30px;

    border-collapse:collapse;

    background:rgba(255,255,255,0.08);

}

th,
td{

    padding:14px;

    border:1px solid rgba(255,255,255,0.4);

}

th{

    background:
    linear-gradient(
        45deg,
        #7e22ce,
        #ec4899
    );

}

tr:hover{

    background:rgba(255,255,255,0.10);

}

.sin-comentarios{

    margin:30px;

    padding:25px;

    background:rgba(255,255,255,0.08);

    border-radius:20px;

    font-size:18px;

}

button{

    padding:13px 25px;

    border:none;

    border-radius:25px;

    background:
    linear-gradient(
        45deg,
        #8b5cf6,
        #ec4899
    );

    color:white;

    font-size:17px;

    cursor:pointer;

    transition:0.3s;

}

button:hover{

    transform:scale(1.05);

    box-shadow:0 0 18px #ec4899;

}

a{

    text-decoration:none;

}

@media(max-width:700px){

    .contenedor{

        width:95%;
        padding:15px;

    }

    table{

        font-size:13px;

    }

    th,
    td{

        padding:8px;

    }

}

</style>

</head>

<body>

<div class="contenedor">

<h1>
💬 MIS COMENTARIOS
</h1>

<p class="usuario">

👤 Usuario:
<strong>
<?php echo htmlspecialchars($usuario); ?>
</strong>

</p>

<hr>


<?php if($resultado->num_rows > 0){ ?>


<table>

<tr>

<th>N°</th>

<th>Anime</th>

<th>Personaje favorito</th>

<th>Comentario</th>

</tr>


<?php

$contador = 1;

while($fila = $resultado->fetch_assoc()){

?>

<tr>

<td>

<?php echo $contador; ?>

</td>


<td>

<?php
echo htmlspecialchars(
    $fila["anime"]
);
?>

</td>


<td>

<?php
echo htmlspecialchars(
    $fila["personaje"]
);
?>

</td>


<td>

<?php
echo htmlspecialchars(
    $fila["comentario"]
);
?>

</td>

</tr>


<?php

$contador++;

}

?>


</table>


<?php }else{ ?>


<div class="sin-comentarios">

<h2>
😿 Todavía no tienes comentarios
</h2>

<p>

Cuando recomiendes un anime desde Anime World,
tus comentarios aparecerán aquí.

</p>

</div>


<?php } ?>


<br><br>


<a href="perfil.php">

<button>

👤 ⬅ Volver a mi perfil

</button>

</a>


<br><br>


<a href="trabajo.php">

<button>

🌸 Volver a Anime World

</button>

</a>


</div>


<?php

$stmt->close();

$conexion->close();

?>


</body>

</html>