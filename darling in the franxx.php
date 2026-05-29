<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Darling in the Franxx - Historia</title>

<link rel="icon" href="imagenes/darling1.jpg">

<link rel="stylesheet" href="css/darling.css">

</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
❤️ BIENVENIDOS A DARLING IN THE FRANXX ❤️
</h1>

<p class="subtitulo">
Una historia de amor, identidad, batallas y sacrificio
</p>

</header>

<hr>

<h2 class="titulo2">
📌 ¿Qué encontrarás aquí?
</h2>

<ul class="lista">

<li>Historia completa</li>
<li>Información de personajes</li>
<li>Fondos de pantalla</li>
<li>GIFs animados</li>

</ul>

<hr>

<h2 class="titulo3">
📖 Resumen
</h2>

<p class="parrafo">

En un futuro postapocalíptico, la humanidad vive protegida en ciudades móviles llamadas Plantaciones.
Los niños son entrenados como pilotos para controlar robots gigantes llamados Franxx.

</p>

<hr>

<h2 class="titulo3">
⚔ Desarrollo
</h2>

<p class="parrafo">

La historia sigue a Hiro hasta que conoce a Zero Two, una misteriosa chica con sangre Klaxosaurio.

</p>

<hr>

<h2 class="personajes">
👥 Personajes principales
</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">

<th>Personaje</th>
<th>Descripción</th>

</tr>

<tr>
<td>Hiro</td>
<td>Protagonista</td>
</tr>

<tr>
<td>Zero Two</td>
<td>Piloto híbrida</td>
</tr>

<tr>
<td>Ichigo</td>
<td>Líder del escuadrón</td>
</tr>

<tr>
<td>Goro</td>
<td>Mejor amigo de Hiro</td>
</tr>

<tr>
<td>Kokoro</td>
<td>Piloto sensible</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">

Darling in the Franxx explora temas como el amor, identidad y sacrificio.

</p>

<hr>
<hr>

<h2 class="menu">
⭐ Valora Darling in the Franxx ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input
type="hidden"
name="anime"
value="Darling in the Franxx">
<input
type="hidden"
name="pagina"
value="../darling in the franxx.php">

<label>Tu puntuación:</label>

<br><br>

<select name="puntuacion" required>

<option value="">Seleccione</option>

<option value="1">⭐</option>
<option value="2">⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="5">⭐⭐⭐⭐⭐</option>

</select>

<br><br>

<input
type="submit"
value="Guardar valoración">

</form>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.7);
padding:20px;
border-radius:20px;
text-align:center;">

<h3>
🔒 Debes iniciar sesión para valorar Darling
</h3>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#ff4da6,#ff80bf);
color:white;
cursor:pointer;">

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>
<hr>

<h2 class="menu">
❤️ Añadir Re:Zero a favoritos ❤️
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavoritos.php" method="POST">

<input type="hidden" name="anime" value="Darling in the fraxx">

<input type="hidden" name="pagina" value="../darling in the fraxx.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>


<hr>

<h2 class="menu">
❤️ Menú Darling in the Franxx ❤️
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>

<h3>📚 Historia / Capítulos</h3>

<a href="mangas de darling.php">

<img src="imagenes/Darling.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>🖼 Imágenes y GIFs</h3>

<a href="imagenes-gifs-zero.html">

<img src="imagenes/zerro1.jpg"
width="250"
height="180">

</a>

</td>

</tr>

<tr>

<td>

<h3>👥 Personajes</h3>

<a href="personajesdarling.html">

<img src="imagenes/zero-two1.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>⬅ Volver</h3>

<a href="trabajo.php">

<img src="imagenes/zero3.jpg"
width="250"
height="180">

</a>

</td>

</tr>

</table>

</div>

</body>
</html>