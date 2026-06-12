<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Bleach - Historia</title>

<link rel="icon" href="imagenes/bleach.jpg">
<link rel="stylesheet" href="css/bleach.css?v=1">
</head>

<body>

<div class="contenedor">

<header>
<h1 class="titulo">⚔ BIENVENIDOS AL MUNDO DE BLEACH ⚔</h1>

<p class="subtitulo">
Una historia de shinigamis, hollows, espadas y batallas espirituales
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
Bleach cuenta la historia de Ichigo Kurosaki, un joven que obtiene poderes de shinigami
después de conocer a Rukia Kuchiki. Desde ese momento, Ichigo debe proteger a los humanos
de los hollows y enfrentarse a enemigos cada vez más poderosos.
</p>

<hr>

<h2 class="titulo3">⚔ Desarrollo</h2>

<p class="parrafo">
A medida que avanza la historia, Ichigo descubre el mundo de la Sociedad de Almas,
los Arrancar, los Espada, los Quincy y secretos sobre su propio origen.
Sus batallas lo llevan a superar sus límites y proteger a sus amigos.
</p>

<hr>

<h2 class="personajes">👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Ichigo Kurosaki</td>
<td>Protagonista con poderes de shinigami</td>
</tr>

<tr>
<td>Rukia Kuchiki</td>
<td>Shinigami que le entrega sus poderes a Ichigo</td>
</tr>

<tr>
<td>Byakuya Kuchiki</td>
<td>Capitán noble y poderoso</td>
</tr>

<tr>
<td>Kenpachi Zaraki</td>
<td>Capitán amante de las batallas</td>
</tr>

<tr>
<td>Sōsuke Aizen</td>
<td>Uno de los villanos más inteligentes y peligrosos</td>
</tr>

</table>

<hr>

<h2 class="titulo3">🌙 Temas principales</h2>

<p class="parrafo">
Bleach trata temas como el deber, la protección, la fuerza interior, la amistad,
el sacrificio y la lucha contra enemigos espirituales.
</p>

<hr>

<h2 class="menu">⭐ Valora Bleach ⭐</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Bleach">
<input type="hidden" name="pagina" value="../bleach.php">

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

<h3>🔒 Debes iniciar sesión para valorar Bleach</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">❤️ Añadir Bleach a favoritos ❤️</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Bleach">
<input type="hidden" name="pagina" value="../bleach.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">⚔ Menú de Bleach ⚔</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Manga</h3>
<a href="manga_bleach.php">
<img src="imagenes/ichigo.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_bleach.html">
<img src="imagenes/bleach.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_bleach.html">
<img src="imagenes/aizen.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/bleach.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>