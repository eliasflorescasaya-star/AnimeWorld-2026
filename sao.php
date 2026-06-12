
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Sword Art Online - Historia</title>

<link rel="icon" href="imagenes/kirito.jpg">

<link rel="stylesheet" href="css/sao.css?v=1">

</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🗡 BIENVENIDOS A SWORD ART ONLINE 🗡
</h1>

<p class="subtitulo">
Una historia de mundos virtuales, supervivencia y batallas legendarias
</p>

</header>

<hr>

<h2 class="titulo2">
📌 ¿Qué encontrarás aquí?
</h2>

<ul class="lista">

<li>Novela ligera</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia</li>
<li>Valoraciones y favoritos</li>

</ul>

<hr>

<h2 class="titulo3">
📖 Resumen
</h2>

<p class="parrafo">

Sword Art Online cuenta la historia de Kazuto Kirigaya (Kirito), un jugador atrapado
junto con miles de personas dentro de un videojuego de realidad virtual donde morir
en el juego significa morir en la vida real.

</p>

<hr>

<h2 class="titulo3">
⚔ Desarrollo
</h2>

<p class="parrafo">

Kirito deberá superar pisos, formar amistades y enfrentarse a enemigos poderosos
mientras intenta escapar de diferentes mundos virtuales como Aincrad, Alfheim,
Gun Gale Online y Underworld.

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
<td>Kirito</td>
<td>Espadachín negro y protagonista principal</td>
</tr>

<tr>
<td>Asuna</td>
<td>Subcomandante poderosa y compañera de Kirito</td>
</tr>

<tr>
<td>Alice</td>
<td>Caballera del Underworld</td>
</tr>

<tr>
<td>Sinon</td>
<td>Especialista en combate a distancia</td>
</tr>

<tr>
<td>Eugeo</td>
<td>Gran amigo de Kirito en Alicization</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">

La historia trata temas como la supervivencia, la amistad, el amor,
la tecnología, la realidad virtual y el crecimiento personal.

</p>

<hr>

<h2 class="menu">

⭐ Valora Sword Art Online ⭐

</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Sword Art Online">

<input type="hidden" name="pagina" value="../sao.php">

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

<h3>
🔒 Debes iniciar sesión para valorar SAO
</h3>

<a href="cuenta.html">

<button>

👤 Iniciar sesión

</button>

</a>

<?php } ?>

<hr>

<h2 class="menu">

❤️ Añadir SAO a favoritos ❤️

</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavoritos.php" method="POST">

<input type="hidden" name="anime" value="Sword Art Online">

<input type="hidden" name="pagina" value="../sao.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>

🔒 Debes iniciar sesión para guardar favoritos

</h3>

<a href="cuenta.html">

<button>

👤 Iniciar sesión

</button>

</a>

<?php } ?>

<hr>

<h2 class="menu">

🗡 Menú de Sword Art Online 🗡

</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>

<h3>📚 Novela ligera</h3>

<a href="novela_sao.php">

<img src="imagenes/kirito.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>🖼 Imágenes y GIFs</h3>

<a href="imagenes_sao.html">

<img src="imagenes/asuna.jpg"
width="250"
height="180">

</a>

</td>

</tr>

<tr>

<td>

<h3>👥 Personajes</h3>

<a href="personajes_sao.html">

<img src="imagenes/alice.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>⬅ Volver</h3>

<a href="trabajo.php">

<img src="imagenes/sao.jpg"
width="250"
height="180">

</a>

</td>

</tr>

</table>

</div>

</body>

</html>

