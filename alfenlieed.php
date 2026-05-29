<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Elfen Lied - Historia</title>

<link rel="icon" href="imagenes/elfenlieed.jpg">

<link rel="stylesheet" href="css/elfend.css">

</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🌸 BIENVENIDOS AL MUNDO DE ELFEN LIED 🌸
</h1>

<p class="subtitulo">
Una historia de tragedia, dolor, rechazo y búsqueda de aceptación
</p>

</header>

<hr>

<h2 class="titulo2">
📌 ¿Qué encontrarás aquí?
</h2>

<ul class="lista">

<li>Manga y anime</li>
<li>Información de personajes</li>
<li>Fondos de pantalla</li>
<li>GIFs animados</li>

</ul>

<hr>

<h2 class="titulo3">
📖 Resumen
</h2>

<p class="parrafo">

Lucy es una misteriosa joven perteneciente a una especie conocida como Diclonius,
seres con poderes invisibles llamados vectores capaces de destruir todo a su paso.

</p>

<hr>

<h2 class="titulo3">
⚔ Desarrollo
</h2>

<p class="parrafo">

Lucy enfrenta rechazo, sufrimiento y persecución debido a su naturaleza como Diclonius.

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
<td>Lucy / Nyu</td>
<td>Diclonius protagonista</td>
</tr>

<tr>
<td>Kouta</td>
<td>Joven que ayuda a Lucy</td>
</tr>

<tr>
<td>Yuka</td>
<td>Amiga de la infancia</td>
</tr>

<tr>
<td>Nana</td>
<td>Diclonius experimental</td>
</tr>

<tr>
<td>Kurama</td>
<td>Director del laboratorio</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">

Elfen Lied aborda temas como rechazo, discriminación, soledad y sufrimiento humano.

</p>

<hr>
<hr>

<h2 class="menu">
⭐ Valora Elfen Lied ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input
type="hidden"
name="anime"
value="Elfen Lied">

<input
type="hidden"
name="pagina"
value="../alfenlieed.php">

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
🔒 Debes iniciar sesión para valorar Elfen Lied
</h3>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#cc0066,#ff3399);
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

<input type="hidden" name="anime" value="Elfend lieed">

<input type="hidden" name="pagina" value="../alfendlieed.php">

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
🌸 Menú de Elfen Lied 🌸
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>

<h3>📚 Mangas</h3>

<a href="mangaselfenlied.php">

<img src="imagenes/elfenlieed4.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>🖼 Imágenes y GIFs</h3>

<a href="imageneselfendlieed.html">

<img src="imagenes/elfenlieed5.png"
width="250"
height="180">

</a>

</td>

</tr>

<tr>

<td>

<h3>👥 Personajes</h3>

<a href="personajeselfen.html">

<img src="imagenes/elfenlieed2.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>⬅ Volver</h3>

<a href="trabajo.php">

<img src="imagenes/elfenlieed.jpg"
width="250"
height="180">

</a>

</td>

</tr>

</table>

</div>

</body>
</html>