<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Black Clover - Historia</title>

<link rel="icon" href="imagenes/black.jpg">
<link rel="stylesheet" href="css/blackclover.css?v=1">
</head>

<body>

<div class="contenedor">

<header>
<h1 class="titulo">🍀 BIENVENIDOS AL MUNDO DE BLACK CLOVER 🍀</h1>

<p class="subtitulo">
Una historia de magia, rivalidad, esfuerzo y el sueño de convertirse en Rey Mago
</p>
</header>

<hr>

<h2 class="titulo2">📌 ¿Qué encontrarás aquí?</h2>

<ul class="lista">
<li>Manga</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia</li>
<li>Valoraciones y favoritos</li>
</ul>

<hr>

<h2 class="titulo3">📖 Resumen</h2>

<p class="parrafo">
Black Clover cuenta la historia de Asta, un joven nacido sin magia en un mundo donde la magia lo es todo.
A pesar de eso, sueña con convertirse en Rey Mago usando su fuerza física, determinación y una misteriosa espada de anti-magia.
</p>

<hr>

<h2 class="titulo3">⚔ Desarrollo</h2>

<p class="parrafo">
Asta y Yuno crecieron juntos como rivales. Mientras Yuno posee un gran talento mágico,
Asta compensa su falta de magia con esfuerzo y poder anti-mágico. Su camino los lleva a unirse
a diferentes escuadrones de caballeros mágicos y enfrentar poderosos enemigos.
</p>

<hr>

<h2 class="personajes">👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Asta</td>
<td>Protagonista sin magia que usa anti-magia</td>
</tr>

<tr>
<td>Yuno</td>
<td>Rival de Asta y usuario de magia de viento</td>
</tr>

<tr>
<td>Noelle Silva</td>
<td>Noble con gran poder mágico de agua</td>
</tr>

<tr>
<td>Yami Sukehiro</td>
<td>Capitán de los Toros Negros</td>
</tr>

<tr>
<td>Julius Novachrono</td>
<td>Rey Mago con magia del tiempo</td>
</tr>

</table>

<hr>

<h2 class="titulo3">🌙 Temas principales</h2>

<p class="parrafo">
Black Clover trata temas como la superación, la amistad, la rivalidad, el esfuerzo,
la igualdad y la importancia de no rendirse aunque todos estén en contra.
</p>

<hr>

<h2 class="menu">⭐ Valora Black Clover ⭐</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Black Clover">
<input type="hidden" name="pagina" value="../blackclover.php">

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

<h3>🔒 Debes iniciar sesión para valorar Black Clover</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">❤️ Añadir Black Clover a favoritos ❤️</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Black Clover">
<input type="hidden" name="pagina" value="../blackclover.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">🍀 Menú de Black Clover 🍀</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Manga</h3>
<a href="manga_blackclover.php">
<img src="imagenes/asta.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_blackclover.html">
<img src="imagenes/black.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_blackclover.html">
<img src="imagenes/yami.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/black.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>