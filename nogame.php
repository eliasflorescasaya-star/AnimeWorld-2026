<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>No Game No Life - Historia</title>

<link rel="icon" href="imagenes/nogame.jpg">
<link rel="stylesheet" href="css/nogame.css?v=1">
</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🎮 BIENVENIDOS AL MUNDO DE NO GAME NO LIFE 🎮
</h1>

<p class="subtitulo">
Una historia de juegos, estrategia, inteligencia y mundos dominados por reglas
</p>

</header>

<hr>

<h2 class="titulo2">📌 ¿Qué encontrarás aquí?</h2>

<ul class="lista">
<li>Novela ligera</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia</li>
<li>Valoraciones y favoritos</li>
</ul>

<hr>

<h2 class="titulo3">📖 Resumen</h2>

<p class="parrafo">
No Game No Life cuenta la historia de Sora y Shiro, dos hermanos conocidos como “Blank”,
jugadores invencibles que son transportados a Disboard, un mundo donde todos los conflictos
se resuelven mediante juegos.
</p>

<hr>

<h2 class="titulo3">⚔ Desarrollo</h2>

<p class="parrafo">
En Disboard, Sora y Shiro usan su inteligencia, estrategia y trabajo en equipo para desafiar
a razas poderosas, ganar territorios y acercarse a su objetivo: enfrentarse al dios de los juegos.
</p>

<hr>

<h2 class="personajes">👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Sora</td>
<td>Genio estratega experto en leer a las personas</td>
</tr>

<tr>
<td>Shiro</td>
<td>Genio del cálculo, lógica y juegos complejos</td>
</tr>

<tr>
<td>Stephanie Dola</td>
<td>Princesa de Elkia que acompaña a Sora y Shiro</td>
</tr>

<tr>
<td>Jibril</td>
<td>Flügel extremadamente poderosa e inteligente</td>
</tr>

<tr>
<td>Tet</td>
<td>Dios de los juegos y gobernante de Disboard</td>
</tr>

</table>

<hr>

<h2 class="titulo3">🌙 Temas principales</h2>

<p class="parrafo">
La historia trata temas como la estrategia, la confianza entre hermanos, los juegos mentales,
la inteligencia, la cooperación y la forma de ganar sin usar violencia directa.
</p>

<hr>

<h2 class="menu">⭐ Valora No Game No Life ⭐</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="No Game No Life">
<input type="hidden" name="pagina" value="../nogamenolife.php">

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

<h3>🔒 Debes iniciar sesión para valorar No Game No Life</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">❤️ Añadir No Game No Life a favoritos ❤️</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="No Game No Life">
<input type="hidden" name="pagina" value="../nogamenolife.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">🎮 Menú de No Game No Life 🎮</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Novela ligera</h3>
<a href="novela_nogamenolife.php">
<img src="imagenes/sora.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_nogamenolife.html">
<img src="imagenes/shiro.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_nogamenolife.html">
<img src="imagenes/jibril.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/nogame.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>