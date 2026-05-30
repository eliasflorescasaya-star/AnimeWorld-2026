<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Naruto - Historia</title>

<link rel="icon" href="imagenes/Naruto uzumaki ★.jfif">

<link rel="stylesheet" href="css/naruto.css?v=21">

</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🔥 BIENVENIDOS AL MUNDO DE NARUTO 🔥
</h1>

<p class="subtitulo">
Una historia de ninjas, sueños, amistad y superación
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

Naruto es una historia que se desarrolla en un mundo ninja, donde los jóvenes entrenan
desde pequeños para convertirse en guerreros habilidosos.

</p>

<hr>

<h2 class="titulo3">
⚔ Naruto Uzumaki
</h2>

<p class="parrafo">

Naruto es el protagonista principal, conocido por su energía, determinación y espíritu
inquebrantable.

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
<td>Naruto Uzumaki</td>
<td>Protagonista</td>
</tr>

<tr>
<td>Sasuke Uchiha</td>
<td>Rival de Naruto</td>
</tr>

<tr>
<td>Sakura Haruno</td>
<td>Compañera de equipo</td>
</tr>

<tr>
<td>Kakashi Hatake</td>
<td>Maestro del Equipo 7</td>
</tr>

<tr>
<td>Kurama</td>
<td>Zorro de Nueve Colas</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">

Naruto aborda temas como amistad, esfuerzo, perseverancia y superación.

</p>

<hr>
<hr>

<h2 class="menu">
⭐ Valora Naruto ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input
type="hidden"
name="anime"
value="Naruto">
<input
type="hidden"
name="pagina"
value="../naruto.php">

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
🔒 Debes iniciar sesión para valorar Naruto
</h3>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#ff9900,#ff6600);
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

<input type="hidden" name="anime" value="naruto">

<input type="hidden" name="pagina" value="../naruto.php">

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
🔥 Menú de Naruto 🔥
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>

<h3>📚 Mangas</h3>

<a href="mangas-de-naruto.php">

<img src="imagenes/naruto2.1.jfif"
width="250"
height="180">

</a>

</td>

<td>

<h3>🖼 Imágenes y GIFs</h3>

<a href="naruto-imagenes.html">

<img src="imagenes/naruto3.1.jfif"
width="250"
height="180">

</a>

</td>

</tr>

<tr>

<td>

<h3>👥 Personajes</h3>

<a href="personajes-naruto.html">

<img src="imagenes/naruto2.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>⬅ Volver</h3>

<a href="trabajo.php">

<img src="imagenes/naruto3.1.jfif"
width="250"
height="180">

</a>

</td>

</tr>

</table>

</div>

</body>

</html>