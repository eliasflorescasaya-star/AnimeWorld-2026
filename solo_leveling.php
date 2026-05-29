<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">

<title>Solo Leveling</title>

<link rel="icon" href="imagenes/solo1.jpg">
<link rel="stylesheet" href="css/solo.css">
</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
⚔ BIENVENIDOS AL MUNDO DE SOLO LEVELING ⚔
</h1>

<p class="subtitulo">
Una historia de cazadores, sombras y evolución
</p>

</header>

<hr>

<h2>📌 ¿Qué encontrarás aquí?</h2>

<ul>
<li>Historia</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Manhwa</li>
<li>Valoración y favoritos</li>
</ul>

<hr>

<h2>📖 Resumen</h2>

<p>
Sung Jin-Woo era conocido como el cazador más débil de la humanidad.
Después de un misterioso incidente en una mazmorra, obtiene un sistema
único que le permite aumentar su poder sin límites.
</p>

<hr>

<h2>⚔ Desarrollo</h2>

<p>
A medida que Jin-Woo completa misiones y derrota enemigos, comienza a subir de nivel
y obtiene la habilidad de controlar sombras. Su camino lo lleva a enfrentar mazmorras,
monstruos, cazadores poderosos y secretos que cambian el destino del mundo.
</p>

<hr>

<h2>👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr>
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Sung Jin-Woo</td>
<td>Protagonista y Monarca de las Sombras</td>
</tr>

<tr>
<td>Cha Hae-In</td>
<td>Cazadora rango S</td>
</tr>

<tr>
<td>Beru</td>
<td>Soldado sombra extremadamente leal</td>
</tr>

<tr>
<td>Igris</td>
<td>Caballero sombra de élite</td>
</tr>

<tr>
<td>Thomas Andre</td>
<td>Cazador de rango nacional</td>
</tr>

<tr>
<td>Go Gun-Hee</td>
<td>Presidente de la Asociación de Cazadores</td>
</tr>

<tr>
<td>Woo Jin-Chul</td>
<td>Inspector de la Asociación</td>
</tr>

<tr>
<td>Ashborn</td>
<td>Monarca original de las Sombras</td>
</tr>

</table>

<hr>

<h2>🌙 Temas principales</h2>

<p>
Solo Leveling trata temas como la superación, la fuerza de voluntad,
el crecimiento personal, la responsabilidad y el poder obtenido a través del esfuerzo.
También muestra cómo alguien considerado débil puede cambiar su destino.
</p>

<hr>

<h2 class="menu">
⭐ Valora Solo Leveling ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Solo Leveling">

<input type="hidden" name="pagina" value="../solo_leveling.php">

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

<input type="submit" value="Guardar valoración">

</form>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.7);
padding:20px;
border-radius:20px;
text-align:center;">

<h3>🔒 Debes iniciar sesión para valorar Solo Leveling</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

</div>

<?php } ?>

<hr>

<h2 class="menu">
❤️ Añadir Solo Leveling a favoritos ❤️
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Solo Leveling">

<input type="hidden" name="pagina" value="../solo_leveling.php">

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
⚔ Menú Solo Leveling ⚔
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Manhwa</h3>
<a href="manhwa_solo.php">
<img src="imagenes/solo1.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_solo.html">
<img src="imagenes/solo2.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajessolo.php">
<img src="imagenes/solo3.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/solo4.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>