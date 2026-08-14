<?php

session_start();

/* =========================
   VERIFICAR SESIÓN
========================= */

if(!isset($_SESSION["usuario"])){

    header("Location: cuenta.html");
    exit();

}

$usuario = $_SESSION["usuario"];


/* =========================
   CONEXIÓN A LA BASE DE DATOS
========================= */

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "animeworld"
);

if($conexion->connect_error){

    die("Error de conexión: " . $conexion->connect_error);

}


/* =========================
   OBTENER FOTO DEL USUARIO
========================= */

$sql = "SELECT foto FROM usuarios WHERE usuario = ?";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("s", $usuario);

$stmt->execute();

$resultado = $stmt->get_result();

$datosUsuario = $resultado->fetch_assoc();


/* =========================
   FOTO POR DEFECTO
========================= */

$foto = $datosUsuario["foto"] ?? "avatar.jpg";

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Mi Perfil - Anime World</title>

<link rel="icon" href="imagenes/fondo.jpg">

<link rel="stylesheet" href="css/perfil.css?v=2">

</head>

<body>

<div class="contenedor-perfil">

<h1>
👤 MI PERFIL
</h1>

<div class="tarjeta-perfil">


<!-- =========================
     FOTO DE PERFIL
========================= -->

<div class="avatar">

<img
src="imagenes/perfiles/<?php echo htmlspecialchars($foto); ?>"
alt="Foto de perfil">

</div>


<!-- =========================
     CAMBIAR FOTO
========================= -->

<form
action="php/subirfoto.php"
method="POST"
enctype="multipart/form-data">

<label>
📷 Cambiar foto de perfil
</label>

<br><br>

<input
type="file"
name="foto"
accept="image/jpeg,image/png,image/webp"
required>

<br><br>

<input
type="submit"
value="Subir foto">

</form>


<!-- =========================
     USUARIO
========================= -->

<h2>

<?php echo htmlspecialchars($usuario); ?>

</h2>

<p class="bienvenida">

Bienvenido a tu perfil de Anime World 🌸

</p>

<hr>


<!-- =========================
     DATOS DE LA CUENTA
========================= -->

<div class="datos">

<h3>
📌 Información de la cuenta
</h3>

<p>

<strong>Usuario:</strong>

<?php echo htmlspecialchars($usuario); ?>

</p>

<p>

<strong>Estado:</strong>

🟢 Sesión iniciada

</p>

</div>

<hr>


<!-- =========================
     ACTIVIDAD
========================= -->

<h2>
🌸 Mi actividad
</h2>

<div class="opciones">


<a href="misfavoritos.php">

<button class="favoritos">

❤️ Mis favoritos

</button>

</a>


<a href="misvaloraciones.php">

<button class="valoraciones">

⭐ Mis valoraciones

</button>

</a>


<a href="miscomentarios.php">

<button class="comentarios">

💬 Mis comentarios

</button>

</a>


<a href="ranking.php">

<button class="ranking">

🏆 Ranking de animes

</button>

</a>


</div>

<hr>


<!-- =========================
     ANIME WORLD
========================= -->

<h2>
🎌 Anime World
</h2>

<p>

Desde tu perfil puedes revisar los animes que guardaste,
tus valoraciones y tu actividad dentro de Anime World.

</p>

<br>


<a href="trabajo.php">

<button class="volver">

⬅ Volver a Anime World

</button>

</a>


<br><br>


<a href="php/cerrarsesion.php">

<button class="cerrar">

🚪 Cerrar sesión

</button>

</a>


</div>

</div>

</body>

</html>